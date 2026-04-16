<?php
require "db_config.php";

function limparCPF($cpf)
{
    return preg_replace('/\D/', '', $cpf);
}

function limparTelefone($fone)
{
    return preg_replace('/\D/', '', $fone);
}

function separarNome($nome)
{
    $partes = explode(' ', trim($nome), 2);

    return [
        'first_name' => $partes[0] ?? null,
        'last_name'  => $partes[1] ?? null,
    ];
}

try {
    $pdo->beginTransaction();

    $sql = "
        SELECT nome, cpf, email, whats
        FROM promo
        WHERE cpf IS NOT NULL
    ";

    $stmt = $pdo->query($sql);

    $sqlInsert = "
        INSERT INTO participants2 (
            cpf,
            first_name,
            last_name,
            phone,
            email,
            full_name,
            created_at,
            updated_at
        ) VALUES (
            :cpf,
            :first_name,
            :last_name,
            :phone,
            :email,
            :full_name,
            NOW(),
            NOW()
        )
    ";

    $insert = $pdo->prepare($sqlInsert);

    $importados = 0;
    $ignorados = 0;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $cpf   = limparCPF($row['cpf']);
        $phone = limparTelefone($row['whats']);

        if (!$cpf) {
            $ignorados++;
            continue;
        }

        $nome = separarNome($row['nome']);

        try {
            $insert->execute([
                ':cpf'        => $cpf,
                ':first_name' => $nome['first_name'],
                ':last_name'  => $nome['last_name'],
                ':phone'      => $phone,
                ':email'      => $row['email'],
                ':full_name'  => $row['nome'],
            ]);

            $importados++;
        } catch (PDOException $e) {

            // erro de duplicidade (CPF/email)
            if ($e->getCode() == 23000) {
                $ignorados++;
                continue;
            }

            throw $e;
        }
    }

    $pdo->commit();

    echo "✅ Importados: {$importados}<br>";
    echo "⚠️ Ignorados (duplicados/invalidos): {$ignorados}<br>";
} catch (Exception $e) {
    $pdo->rollBack();
    die("Erro: " . $e->getMessage());
}

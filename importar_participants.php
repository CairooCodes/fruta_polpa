<?php
require "db_config.php";

if (empty($_POST['created_at'])) {
    die("Data de criação é obrigatória.");
}

/* converter datetime-local para MySQL */
$createdAt = str_replace('T', ' ', $_POST['created_at']);

try {
    $pdo->beginTransaction();

    $sqlSelect = "
        SELECT
            p2.cpf,
            p2.first_name,
            p2.last_name,
            p2.birth_date,
            p2.phone,
            p2.email,
            p2.cep,
            p2.state,
            p2.city,
            p2.neighborhood,
            p2.address,
            p2.number,
            p2.complement,
            p2.step,
            p2.step_register,
            p2.is_active,
            p2.full_name
        FROM participants2 p2
        LEFT JOIN participants p
            ON p.cpf COLLATE utf8mb4_unicode_ci
             = p2.cpf COLLATE utf8mb4_unicode_ci
        WHERE p.id IS NULL
          AND p2.cpf IS NOT NULL
        ORDER BY p2.id
        LIMIT 50
    ";

    $stmtSelect = $pdo->prepare($sqlSelect);
    $stmtSelect->execute();

    $sqlInsert = "
        INSERT INTO participants (
            cpf,
            first_name,
            last_name,
            birth_date,
            phone,
            email,
            cep,
            state,
            city,
            neighborhood,
            address,
            number,
            complement,
            step,
            step_register,
            is_active,
            full_name,
            created_at,
            updated_at
        ) VALUES (
            :cpf,
            :first_name,
            :last_name,
            :birth_date,
            :phone,
            :email,
            :cep,
            :state,
            :city,
            :neighborhood,
            :address,
            :number,
            :complement,
            :step,
            :step_register,
            :is_active,
            :full_name,
            :created_at,
            :updated_at
        )
    ";

    $stmtInsert = $pdo->prepare($sqlInsert);

    $importados = 0;

    while ($row = $stmtSelect->fetch(PDO::FETCH_ASSOC)) {
        $stmtInsert->execute([
            ':cpf'           => $row['cpf'],
            ':first_name'    => $row['first_name'],
            ':last_name'     => $row['last_name'],
            ':birth_date'    => $row['birth_date'],
            ':phone'         => $row['phone'],
            ':email'         => $row['email'],
            ':cep'           => $row['cep'],
            ':state'         => $row['state'],
            ':city'          => $row['city'],
            ':neighborhood'  => $row['neighborhood'],
            ':address'       => $row['address'],
            ':number'        => $row['number'],
            ':complement'    => $row['complement'],
            ':step'          => $row['step'],
            ':step_register' => $row['step_register'],
            ':is_active'     => $row['is_active'],
            ':full_name'     => $row['full_name'],
            ':created_at'    => $createdAt,
            ':updated_at'    => $createdAt
        ]);

        $importados++;
    }

    $pdo->commit();

    header("Location: participantes.php?importados={$importados}");
    exit;

} catch (Exception $e) {
    $pdo->rollBack();
    die("Erro na importação: " . $e->getMessage());
}

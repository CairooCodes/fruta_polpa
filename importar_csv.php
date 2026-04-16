<?php
require "db_config.php";

/**
 * Converte qualquer string para UTF-8 automaticamente
 */
function converterParaUtf8($string)
{
    if ($string === null) return null;

    $encoding = mb_detect_encoding($string, ['UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1'], true);

    if ($encoding && $encoding !== 'UTF-8') {
        return mb_convert_encoding($string, 'UTF-8', $encoding);
    }

    return $string;
}

function limparTelefone($fone)
{
    return preg_replace('/\D/', '', $fone);
}

function separarNome($nome)
{
    $nome = trim($nome);
    $partes = explode(' ', $nome, 2);

    return [
        'first_name' => $partes[0] ?? null,
        'last_name'  => $partes[1] ?? null,
    ];
}

/**
 * Gera CPF válido
 */
function gerarCPF()
{
    $n = [];

    for ($i = 0; $i < 9; $i++) {
        $n[$i] = rand(0, 9);
    }

    // evita sequências iguais
    if (count(array_unique($n)) === 1) {
        return gerarCPF();
    }

    // dígito 1
    $soma = 0;
    for ($i = 0, $peso = 10; $i < 9; $i++, $peso--) {
        $soma += $n[$i] * $peso;
    }

    $resto = $soma % 11;
    $n[9] = ($resto < 2) ? 0 : 11 - $resto;

    // dígito 2
    $soma = 0;
    for ($i = 0, $peso = 11; $i < 10; $i++, $peso--) {
        $soma += $n[$i] * $peso;
    }

    $resto = $soma % 11;
    $n[10] = ($resto < 2) ? 0 : 11 - $resto;

    return implode('', $n);
}

function gerarCPFUnico(&$cpfsGerados)
{
    do {
        $cpf = gerarCPF();
    } while (in_array($cpf, $cpfsGerados));

    $cpfsGerados[] = $cpf;

    return $cpf;
}

/**
 * Detecta separador automaticamente
 */
function detectarSeparador($linha)
{
    $delimiters = [";", ",", "\t"];
    $max = 0;
    $best = ",";

    foreach ($delimiters as $delimiter) {
        $count = count(str_getcsv($linha, $delimiter));
        if ($count > $max) {
            $max = $count;
            $best = $delimiter;
        }
    }

    return $best;
}

try {
    $pdo->beginTransaction();

    $arquivo = 'leads.csv';

    if (!file_exists($arquivo)) {
        throw new Exception("Arquivo CSV não encontrado");
    }

    $handle = fopen($arquivo, 'r');

    // lê primeira linha bruta
    $linhaBruta = fgets($handle);

    // converte encoding
    $linhaBruta = converterParaUtf8($linhaBruta);

    // detecta separador
    $separador = detectarSeparador($linhaBruta);

    // volta pro início do arquivo
    rewind($handle);

    // lê cabeçalho
    $header = fgetcsv($handle, 0, $separador);

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

    $cpfsGerados = [];

    while (($row = fgetcsv($handle, 0, $separador)) !== false) {

        // converte encoding de todas colunas
        $row = array_map('converterParaUtf8', $row);

        $email    = $row[0] ?? null;
        $nomeRaw  = $row[1] ?? null;
        $telefone = $row[2] ?? null;
        $celular  = $row[3] ?? null;

        $phone = limparTelefone($celular ?: $telefone);

        if (!$email && !$nomeRaw) {
            $ignorados++;
            continue;
        }

        $nome = separarNome($nomeRaw);

        try {
            $insert->execute([
                ':cpf'        => gerarCPFUnico($cpfsGerados),
                ':first_name' => $nome['first_name'],
                ':last_name'  => $nome['last_name'],
                ':phone'      => $phone,
                ':email'      => $email,
                ':full_name'  => $nomeRaw,
            ]);

            $importados++;
        } catch (PDOException $e) {

            if ($e->getCode() == 23000) {
                $ignorados++;
                continue;
            }

            throw $e;
        }
    }

    fclose($handle);

    $pdo->commit();

    echo "✅ Importados: {$importados}<br>";
    echo "⚠️ Ignorados: {$ignorados}<br>";
} catch (Exception $e) {
    $pdo->rollBack();
    die("Erro: " . $e->getMessage());
}

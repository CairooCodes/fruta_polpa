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

    return trim($string);
}

function limparTelefone($fone)
{
    if (!$fone) return null;

    $fone = preg_replace('/\D/', '', $fone);

    if (strlen($fone) < 10) {
        return null;
    }

    return $fone;
}

function escolherTelefone($telefone, $celular)
{
    if ($celular && strlen($celular) >= 10) {
        return $celular;
    }

    if ($telefone && strlen($telefone) >= 10) {
        return $telefone;
    }

    return null;
}

function gerarTelefoneBR()
{
    $ddds = [
        11,
        12,
        13,
        14,
        15,
        16,
        17,
        18,
        19,
        21,
        22,
        24,
        27,
        28,
        31,
        32,
        33,
        34,
        35,
        37,
        38,
        41,
        42,
        43,
        44,
        45,
        46,
        47,
        48,
        49,
        51,
        53,
        54,
        55,
        61,
        62,
        63,
        64,
        65,
        66,
        67,
        68,
        69,
        71,
        73,
        74,
        75,
        77,
        79,
        81,
        82,
        83,
        84,
        85,
        86,
        87,
        88,
        89,
        91,
        92,
        93,
        94,
        95,
        96,
        97,
        98,
        99
    ];

    $ddd = $ddds[array_rand($ddds)];
    $numero = '9' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);

    return $ddd . $numero;
}

function gerarTelefoneUnico(&$telefonesGerados, $pdo)
{
    do {
        $telefone = gerarTelefoneBR();

        // verifica no banco
        $check = $pdo->prepare("SELECT id FROM participants2 WHERE phone = ?");
        $check->execute([$telefone]);

        $existeNoBanco = $check->fetch();
    } while (in_array($telefone, $telefonesGerados) || $existeNoBanco);

    $telefonesGerados[] = $telefone;

    return $telefone;
}

function separarNome($nome)
{
    $nome = trim($nome);
    $partes = explode(' ', $nome);

    $first = array_shift($partes);
    $last  = implode(' ', $partes);

    return [
        'first_name' => $first ?: null,
        'last_name'  => $last ?: null,
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

    if (count(array_unique($n)) === 1) {
        return gerarCPF();
    }

    $soma = 0;
    for ($i = 0, $peso = 10; $i < 9; $i++, $peso--) {
        $soma += $n[$i] * $peso;
    }

    $resto = $soma % 11;
    $n[9] = ($resto < 2) ? 0 : 11 - $resto;

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

function normalizarHeader($header)
{
    return array_map(function ($col) {
        $col = strtolower($col);
        $col = preg_replace('/[^a-z0-9]/', '', $col);
        return $col;
    }, $header);
}

function buscarCampo($map, $row, $possiveis)
{
    foreach ($possiveis as $campo) {
        if (isset($map[$campo])) {
            return $row[$map[$campo]] ?? null;
        }
    }
    return null;
}

try {
    $pdo->beginTransaction();

    $arquivo = 'leads.csv';

    if (!file_exists($arquivo)) {
        throw new Exception("Arquivo CSV não encontrado");
    }

    $handle = fopen($arquivo, 'r');

    $linhaBruta = fgets($handle);
    $linhaBruta = converterParaUtf8($linhaBruta);
    $separador = detectarSeparador($linhaBruta);

    rewind($handle);

    $header = fgetcsv($handle, 0, $separador);
    $header = normalizarHeader($header);
    $map = array_flip($header);

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
    $telefonesGerados = [];

    while (($row = fgetcsv($handle, 0, $separador)) !== false) {

        $row = array_map('converterParaUtf8', $row);

        $email = buscarCampo($map, $row, ['email', 'e-mail']);
        $nomeRaw = buscarCampo($map, $row, ['nome', 'name', 'fullname']);

        $telefone = buscarCampo($map, $row, [
            'telefone',
            'fone',
            'phone',
            'tel',
            'tel1',
            'contato'
        ]);

        $celular  = buscarCampo($map, $row, [
            'celular',
            'mobile',
            'whatsapp',
            'cel',
            'zap'
        ]);

        $telefone = limparTelefone($telefone);
        $celular  = limparTelefone($celular);

        $phone = escolherTelefone($telefone, $celular);

        // 🔥 GERA TELEFONE SE NÃO EXISTIR
        if (!$phone) {
            $phone = gerarTelefoneUnico($telefonesGerados, $pdo);
        }

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

<?php
require "db_config.php";

function converterParaUtf8($string)
{
    if ($string === null) return null;

    $encoding = mb_detect_encoding($string, ['UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1'], true);

    if ($encoding && $encoding !== 'UTF-8') {
        $string = mb_convert_encoding($string, 'UTF-8', $encoding);
    }

    return trim($string);
}

function limparTelefone($fone)
{
    if (!$fone) return null;

    $fone = preg_replace('/\D/', '', $fone);

    return strlen($fone) >= 10 ? $fone : null;
}

function gerarTelefoneBR()
{
    $ddds = [11,12,13,14,15,16,17,18,19,21,22,24,27,28,31,32,33,34,35,37,38,41,42,43,44,45,46,47,48,49,51,53,54,55,61,62,63,64,65,66,67,68,69,71,73,74,75,77,79,81,82,83,84,85,86,87,88,89,91,92,93,94,95,96,97,98,99];

    $ddd = $ddds[array_rand($ddds)];
    $numero = '9' . str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT);

    return $ddd . $numero;
}

function gerarTelefoneUnico(&$telefonesGerados, $pdo)
{
    do {
        $telefone = gerarTelefoneBR();

        $check = $pdo->prepare("SELECT id FROM participants2 WHERE phone = ?");
        $check->execute([$telefone]);

        $existeNoBanco = $check->fetch();
    } while (in_array($telefone, $telefonesGerados) || $existeNoBanco);

    $telefonesGerados[] = $telefone;

    return $telefone;
}

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

function gerarCPFUnico(&$cpfsGerados, $pdo)
{
    do {
        $cpf = gerarCPF();

        $check = $pdo->prepare("SELECT id FROM participants2 WHERE cpf = ?");
        $check->execute([$cpf]);

        $existeNoBanco = $check->fetch();
    } while (in_array($cpf, $cpfsGerados) || $existeNoBanco);

    $cpfsGerados[] = $cpf;

    return $cpf;
}

function separarNome($nome)
{
    $nome = trim($nome);

    if (!$nome) {
        return [
            'first_name' => null,
            'last_name' => null,
        ];
    }

    $partes = preg_split('/\s+/', $nome);
    $first = array_shift($partes);
    $last = implode(' ', $partes);

    return [
        'first_name' => $first ?: null,
        'last_name' => $last ?: null,
    ];
}

function detectarSeparador($linha)
{
    $delimiters = [";", ",", "\t"];
    $best = ",";
    $max = 0;

    foreach ($delimiters as $delimiter) {
        $count = count(str_getcsv($linha, $delimiter));

        if ($count > $max) {
            $max = $count;
            $best = $delimiter;
        }
    }

    return $best;
}

function normalizarColuna($col)
{
    $col = converterParaUtf8($col);
    $col = strtolower($col);

    $col = str_replace(
        ['á','à','ã','â','é','ê','í','ó','õ','ô','ú','ç'],
        ['a','a','a','a','e','e','i','o','o','o','u','c'],
        $col
    );

    return preg_replace('/[^a-z0-9]/', '', $col);
}

function buscarIndiceHeader($linhas)
{
    foreach ($linhas as $index => $linha) {
        $normalizada = array_map('normalizarColuna', $linha);

        if (
            in_array('nome', $normalizada) ||
            in_array('cidade', $normalizada) ||
            in_array('contatos', $normalizada)
        ) {
            return $index;
        }
    }

    return null;
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

function inserirParticipante($insert, $dados)
{
    $insert->execute([
        ':cpf'        => $dados['cpf'],
        ':first_name' => $dados['first_name'],
        ':last_name'  => $dados['last_name'],
        ':phone'      => $dados['phone'],
        ':email'      => $dados['email'],
        ':full_name'  => $dados['full_name'],
    ]);
}

try {
    $pdo->beginTransaction();

    $arquivos = [
        'clientes_sa_app.csv',
    ];

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

    foreach ($arquivos as $arquivo) {
        if (!file_exists($arquivo)) {
            echo "⚠️ Arquivo não encontrado: {$arquivo}<br>";
            continue;
        }

        $conteudo = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!$conteudo) {
            continue;
        }

        $primeiraLinha = converterParaUtf8($conteudo[0]);
        $separador = detectarSeparador($primeiraLinha);

        $linhas = [];

        foreach ($conteudo as $linha) {
            $linha = converterParaUtf8($linha);
            $linhas[] = str_getcsv($linha, $separador);
        }

        $headerIndex = buscarIndiceHeader($linhas);

        if ($headerIndex === null) {
            echo "⚠️ Header não encontrado em: {$arquivo}<br>";
            continue;
        }

        $header = array_map('normalizarColuna', $linhas[$headerIndex]);
        $map = array_flip($header);

        $tipoResumoWhatsapp = isset($map['contatos']) && isset($map['cidade']);
        $tipoClientes = isset($map['nome']);

        for ($i = $headerIndex + 1; $i < count($linhas); $i++) {
            $row = array_map('converterParaUtf8', $linhas[$i]);

            if ($tipoClientes) {
                $nomeRaw = buscarCampo($map, $row, [
                    'nome',
                    'name',
                    'fullname',
                    'fullnome',
                ]);

                $email = buscarCampo($map, $row, [
                    'email',
                    'emailprincipal',
                    'emailprincipa',
                    'emailprincipall',
                ]);

                $telefone = buscarCampo($map, $row, [
                    'telefone',
                    'fone',
                    'phone',
                    'tel',
                    'celular',
                    'mobile',
                    'whatsapp',
                    'todosostelefonescommascar',
                    'todosostelefonescommascara',
                ]);

                $phone = limparTelefone($telefone);

                if (!$nomeRaw && !$email && !$phone) {
                    $ignorados++;
                    continue;
                }

                if (!$phone) {
                    $phone = gerarTelefoneUnico($telefonesGerados, $pdo);
                }

                if (!$nomeRaw) {
                    $nomeRaw = 'Cliente Importado';
                }

                $nome = separarNome($nomeRaw);

                try {
                    inserirParticipante($insert, [
                        'cpf'        => gerarCPFUnico($cpfsGerados, $pdo),
                        'first_name' => $nome['first_name'],
                        'last_name'  => $nome['last_name'],
                        'phone'      => $phone,
                        'email'      => $email ?: null,
                        'full_name'  => $nomeRaw,
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

            if ($tipoResumoWhatsapp) {
                $cidade = buscarCampo($map, $row, ['cidade']);
                $quantidade = buscarCampo($map, $row, ['contatos']);

                $quantidade = (int) preg_replace('/\D/', '', $quantidade);

                if (!$cidade || $quantidade <= 0) {
                    $ignorados++;
                    continue;
                }

                for ($j = 1; $j <= $quantidade; $j++) {
                    $nomeRaw = "Contato {$cidade} {$j}";
                    $nome = separarNome($nomeRaw);

                    try {
                        inserirParticipante($insert, [
                            'cpf'        => gerarCPFUnico($cpfsGerados, $pdo),
                            'first_name' => $nome['first_name'],
                            'last_name'  => $nome['last_name'],
                            'phone'      => gerarTelefoneUnico($telefonesGerados, $pdo),
                            'email'      => null,
                            'full_name'  => $nomeRaw,
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
            }
        }
    }

    $pdo->commit();

    echo "✅ Importados: {$importados}<br>";
    echo "⚠️ Ignorados: {$ignorados}<br>";
} catch (Exception $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }

    die("Erro: " . $e->getMessage());
}
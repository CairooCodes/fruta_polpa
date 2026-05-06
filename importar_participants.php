<?php
require "db_config.php";

if (
    empty($_POST['created_at']) ||
    empty($_POST['limit']) ||
    empty($_POST['ceps'])
) {
    die("Dados obrigatórios não informados.");
}

$createdAt = str_replace('T', ' ', $_POST['created_at']);

$limit = (int) $_POST['limit'];
$limit = max(1, min($limit, 1000));

// =========================
// 🔥 TRATAMENTO DOS CEPS
// =========================
$cepsInput = explode("\n", $_POST['ceps']);
$ceps = [];

foreach ($cepsInput as $cep) {
    $cepLimpo = preg_replace('/\D/', '', $cep);
    if (!empty($cepLimpo) && strlen($cepLimpo) >= 7) {
        $ceps[] = $cepLimpo;
    }
}

if (empty($ceps)) {
    die("Nenhum CEP válido informado.");
}

try {
    $pdo->beginTransaction();

    // =========================
    // 🔥 CACHE DE CEP → CIDADE/ESTADO
    // =========================
    $mapCep = [];

    $stmtMap = $pdo->query("
        SELECT cep, city, state 
        FROM participants 
        WHERE cep IS NOT NULL
          AND city IS NOT NULL 
          AND state IS NOT NULL
    ");

    while ($r = $stmtMap->fetch(PDO::FETCH_ASSOC)) {
        $cepKey = preg_replace('/\D/', '', $r['cep']);

        if (!isset($mapCep[$cepKey])) {
            $mapCep[$cepKey] = [
                'city' => $r['city'],
                'state' => $r['state']
            ];
        }
    }

    // =========================
    // 🔥 SELECT ORIGEM
    // =========================
    $sqlSelect = "
        SELECT 
            p2.cpf,
            p2.first_name,
            p2.last_name,
            p2.birth_date,
            p2.phone,
            p2.email,
            p2.state,
            p2.city,
            p2.neighborhood,
            p2.address,
            p2.number,
            p2.complement,
            COALESCE(p2.step, 0) as step,
            COALESCE(p2.step_register, 0) as step_register,
            COALESCE(p2.is_active, 1) as is_active,
            p2.full_name
        FROM participants2 p2
        LEFT JOIN participants p
            ON p.cpf COLLATE utf8mb4_unicode_ci
             = p2.cpf COLLATE utf8mb4_unicode_ci
        WHERE p.id IS NULL
          AND p2.cpf IS NOT NULL
        ORDER BY p2.id
        LIMIT {$limit}
    ";

    $stmtSelect = $pdo->prepare($sqlSelect);
    $stmtSelect->execute();

    // =========================
    // 🔥 INSERT
    // =========================
    $sqlInsert = "
        INSERT INTO participants (
            cpf, first_name, last_name, birth_date,
            phone, email, cep, state, city,
            neighborhood, address, number, complement,
            step, step_register, is_active, full_name,
            created_at, updated_at
        ) VALUES (
            :cpf, :first_name, :last_name, :birth_date,
            :phone, :email, :cep, :state, :city,
            :neighborhood, :address, :number, :complement,
            :step, :step_register, :is_active, :full_name,
            :created_at, :updated_at
        )
    ";

    $stmtInsert = $pdo->prepare($sqlInsert);

    $importados = 0;
    $indexCep = 0;
    $totalCeps = count($ceps);

    // =========================
    // 🔥 LOOP
    // =========================
    while ($row = $stmtSelect->fetch(PDO::FETCH_ASSOC)) {

        $cepAtual = $ceps[$indexCep];

        // 🔥 BUSCA NO CACHE
        $cepData = $mapCep[$cepAtual] ?? null;

        $city = $cepData['city'] ?? $row['city'];
        $state = $cepData['state'] ?? $row['state'];

        $stmtInsert->execute([
            ':cpf' => preg_replace('/\D/', '', $row['cpf']),
            ':first_name' => $row['first_name'] ?? '',
            ':last_name' => $row['last_name'] ?? '',
            ':birth_date' => $row['birth_date'],
            ':phone' => substr(preg_replace('/\D/', '', $row['phone']), 0, 20),
            ':email' => strtolower($row['email'] ?? ''),
            ':cep' => $cepAtual,
            ':state' => $state,
            ':city' => $city,
            ':neighborhood' => $row['neighborhood'],
            ':address' => $row['address'],
            ':number' => $row['number'],
            ':complement' => $row['complement'] ?? null,

            ':step' => $row['step'],
            ':step_register' => $row['step_register'],
            ':is_active' => $row['is_active'],

            ':full_name' => $row['full_name'] ?? '',
            ':created_at' => $createdAt,
            ':updated_at' => $createdAt
        ]);

        $importados++;

        // 🔄 distribui os CEPs
        $indexCep = ($indexCep + 1) % $totalCeps;
    }

    $pdo->commit();

    header("Location: participantes.php?importados={$importados}");
    exit;
} catch (Exception $e) {
    $pdo->rollBack();
    die("Erro: " . $e->getMessage());
}

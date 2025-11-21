<?php
session_start();
require "../db_config.php";

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['id'] ?? null;
$user_type = $_SESSION['type'] ?? null;

$where = [];
$params = [];


if (!empty($_GET['search'])) {
    $where[] = "(first_name LIKE :search OR last_name LIKE :search OR cpf LIKE :search OR email LIKE :search)";
    $params[':search'] = "%" . $_GET['search'] . "%";
}

if (!empty($_GET['state'])) {
    $where[] = "state = :state";
    $params[':state'] = $_GET['state'];
}


if (!empty($_GET['date_start'])) {
    $where[] = "created_at >= :date_start";
    $params[':date_start'] = $_GET['date_start'] . " 00:00:00";
}


if (!empty($_GET['date_end'])) {
    $where[] = "created_at <= :date_end";
    $params[':date_end'] = $_GET['date_end'] . " 23:59:59";
}

$filterWhere = $where ? "WHERE " . implode(" AND ", $where) : "";


$filterWhereStep0 = $filterWhere ? $filterWhere . " AND step_register = 0" : "WHERE step_register = 0";
$stmt = $pdo->prepare("SELECT COUNT(*) AS total FROM participants $filterWhereStep0");
$stmt->execute($params);
$totalWhats = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// Total Site (step_register IS NULL)
$filterWhereSite = $filterWhere ? $filterWhere . " AND step_register IS NULL" : "WHERE step_register IS NULL";
$stmt = $pdo->prepare("SELECT COUNT(*) AS total FROM participants $filterWhereSite");
$stmt->execute($params);
$totalSite = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

// ESTADOS
$stmt = $pdo->prepare("SELECT state, COUNT(*) AS total FROM participants $filterWhere GROUP BY state ORDER BY total DESC");
$stmt->execute($params);
$estados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Cupons enviados
$stmt = $pdo->prepare("SELECT COUNT(*) as total_sent FROM coupons WHERE image IS NOT NULL");
$stmt->execute();
$coupons_sent = $stmt->fetch(PDO::FETCH_ASSOC)['total_sent'];

// Soma de quantity em coupons
$stmt = $pdo->prepare("SELECT COALESCE(SUM(quantity),0) as total_quantity FROM coupons");
$stmt->execute();
$coupons_quantity_sum = $stmt->fetch(PDO::FETCH_ASSOC)['total_quantity'];

// Cadastro pelo site no horário fixo
$stmt = $pdo->prepare("SELECT COUNT(*) as total_site FROM participants WHERE step_register IS NULL AND created_at = :t");
$stmt->execute([':t' => '2025-10-27 15:19:33']);
$site_registrations_at_time = $stmt->fetch(PDO::FETCH_ASSOC)['total_site'];

// Lista de participantes
$sql = "SELECT * FROM participants $filterWhere ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$participants = $stmt->fetchAll(PDO::FETCH_ASSOC);

$page = 'participantes';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Participantes - Fruta Polpa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo.png" rel="icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>

        <div class="max-w-full px-4 pb-8 mx-auto py-8">



            <!-- CARDS AJUSTADOS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white">
                    <h1 class="text-2xl font-bold mb-6 ml-2">Participantes Cadastrados</h1>
                    <div class="p-4 rounded-lg shadow text-center">
                        <h2 class="text-lg font-bold">WhatsApp</h2>
                        <p class="text-2xl"><?php echo $totalWhats; ?></p>
                    </div>

                    <div class="p-4 rounded-lg shadow text-center">
                        <h2 class="text-lg font-bold">Site</h2>
                        <p class="text-2xl"><?php echo $totalSite; ?></p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">Estados <?php echo count($estados); ?></h3>
                    <canvas id="statesChart" height="200"></canvas>
                </div>
                <div class="bg-white">
                    <div class="p-4 rounded-lg shadow text-center">
                        <h2 class="text-lg font-bold">Cupons enviados</h2>
                        <p class="text-2xl"><?php echo $coupons_sent; ?></p>
                    </div>

                    <div class="p-4 rounded-lg shadow text-center">
                        <h2 class="text-lg font-bold">Quantidade de Polpas</h2>
                        <p class="text-2xl"><?php echo $coupons_quantity_sum; ?></p>
                    </div>
                </div>
            </div>

            <!-- FILTROS (cidade removida) -->
            <form method="get" class="flex flex-wrap gap-4 mb-6">
                <input type="text" name="search" placeholder="Buscar por nome, cpf ou email"
                    value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>"
                    class="px-3 py-2 border rounded-lg w-64">

                <div class="flex items-center space-x-2">
                    <label for="date_start">De:</label>
                    <input type="date" name="date_start" id="date_start"
                        value="<?php echo htmlspecialchars($_GET['date_start'] ?? ''); ?>"
                        class="px-3 py-2 border rounded-lg">
                </div>

                <div class="flex items-center space-x-2">
                    <label for="date_end">Até:</label>
                    <input type="date" name="date_end" id="date_end"
                        value="<?php echo htmlspecialchars($_GET['date_end'] ?? ''); ?>"
                        class="px-3 py-2 border rounded-lg">
                </div>

                <select name="state" class="px-3 py-2 border rounded-lg" onchange="this.form.submit()">
                    <option value="">Todos os estados</option>
                    <?php foreach ($estados as $e): ?>
                        <option value="<?php echo htmlspecialchars($e['state']); ?>"
                            <?php echo (($_GET['state'] ?? '') == $e['state']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($e['state']); ?> (<?php echo $e['total']; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Filtrar
                </button>

                <a href="participantes.php"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                    Limpar
                </a>
            </form>

            <!-- TABELA MANTIDA -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">CPF</th>
                            <th class="px-4 py-3">Telefone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Criado em</th>
                            <th class="px-4 py-3">Atualizado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($participants) > 0): ?>
                            <?php foreach ($participants as $p): ?>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-4 py-3"><?php echo $p['id']; ?></td>
                                    <td class="px-4 py-3"><?php echo htmlspecialchars($p['first_name'] . " " . $p['last_name']); ?></td>
                                    <td class="px-4 py-3"><?php echo htmlspecialchars($p['cpf']); ?></td>
                                    <td class="px-4 py-3"><?php echo htmlspecialchars($p['phone']); ?></td>
                                    <td class="px-4 py-3"><?php echo htmlspecialchars($p['email']); ?></td>
                                    <td class="px-4 py-3"><?php echo date('d/m/Y H:i', strtotime($p['created_at'])); ?></td>
                                    <td class="px-4 py-3"><?php echo $p['updated_at'] ? date('d/m/Y H:i', strtotime($p['updated_at'])) : '-'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center py-4">Nenhum participante encontrado</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Dados dos estados
        const estadosData = <?php echo json_encode($estados); ?>;
        const stateLabels = estadosData.map(e => e.state || 'Sem Estado');
        const stateValues = estadosData.map(e => parseInt(e.total));

        function randomColor() {
            return 'rgba(' + Math.floor(Math.random() * 255) + ',' + Math.floor(Math.random() * 255) + ',' + Math.floor(Math.random() * 255) + ',0.8)';
        }
        const stateColors = stateLabels.map(() => randomColor());

        // Gráfico de ESTADOS
        const ctxStates = document.getElementById('statesChart').getContext('2d');
        new Chart(ctxStates, {
            type: 'pie',
            data: {
                labels: stateLabels,
                datasets: [{
                    data: stateValues,
                    backgroundColor: stateColors,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    tooltip: {
                        enabled: true
                    }
                }
            }
        });
    </script>

</body>

</html>
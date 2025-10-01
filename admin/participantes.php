<?php
session_start();
require "../db_config.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['id'] ?? null;
$user_type = $_SESSION['type'];


// ================== FILTROS ================== //
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

if (!empty($_GET['city'])) {
    $where[] = "neighborhood = :city";
    $params[':city'] = $_GET['city'];
}

$filterWhere = $where ? "WHERE " . implode(" AND ", $where) : "";

// ================== ESTATÍSTICAS ================== //
$total_sql = "SELECT COUNT(*) as total FROM participants $filterWhere";
$stmt = $pdo->prepare($total_sql);
$stmt->execute($params);
$total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];

$estados_sql = "SELECT state, COUNT(*) as total FROM participants $filterWhere GROUP BY state ORDER BY total DESC";
$stmt = $pdo->prepare($estados_sql);
$stmt->execute($params);
$estados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$cidades_sql = "SELECT neighborhood, COUNT(*) as total FROM participants $filterWhere GROUP BY neighborhood ORDER BY total DESC";
$stmt = $pdo->prepare($cidades_sql);
$stmt->execute($params);
$cidades = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ================== PARTICIPANTES ================== //
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>
        <div class="max-w-full px-4 pb-8 mx-auto py-8">

            <h1 class="text-2xl font-bold mb-6">Participantes Cadastrados</h1>

            <!-- ================== CARDS DE RESUMO ================== -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-blue-100 p-4 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Total Participantes</h2>
                    <p class="text-2xl"><?php echo $total; ?></p>
                </div>
                <div class="bg-green-100 p-4 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Estados</h2>
                    <p class="text-2xl"><?php echo count($estados); ?></p>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg shadow text-center">
                    <h2 class="text-lg font-bold">Cidades</h2>
                    <p class="text-2xl"><?php echo count($cidades); ?></p>
                </div>
            </div>

            <!-- ================== FILTROS ================== -->
            <form method="get" class="flex flex-wrap gap-4 mb-6">
                <!-- Busca -->
                <input type="text" name="search" placeholder="Buscar por nome, cpf ou email"
                    value="<?php echo $_GET['search'] ?? ''; ?>"
                    class="px-3 py-2 border rounded-lg w-64">

                <!-- Estados -->
                <select name="state" class="px-3 py-2 border rounded-lg" onchange="this.form.submit()">
                    <option value="">Todos os estados</option>
                    <?php foreach ($estados as $e): ?>
                        <option value="<?php echo $e['state']; ?>" 
                            <?php echo (($_GET['state'] ?? '') == $e['state']) ? 'selected' : ''; ?>>
                            <?php echo $e['state']; ?> (<?php echo $e['total']; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>

                <!-- Cidades -->
                <select name="city" class="px-3 py-2 border rounded-lg" onchange="this.form.submit()">
                    <option value="">Todas as cidades</option>
                    <?php foreach ($cidades as $c): ?>
                        <option value="<?php echo $c['neighborhood']; ?>" 
                            <?php echo (($_GET['city'] ?? '') == $c['neighborhood']) ? 'selected' : ''; ?>>
                            <?php echo $c['neighborhood']; ?> (<?php echo $c['total']; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>

                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Filtrar
                </button>
            </form>

            <!-- ================== TABELA ================== -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nome</th>
                            <th class="px-4 py-3">CPF</th>
                            <th class="px-4 py-3">Nascimento</th>
                            <th class="px-4 py-3">Telefone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">CEP</th>
                            <th class="px-4 py-3">Estado</th>
                            <th class="px-4 py-3">Cidade</th>
                            <th class="px-4 py-3">Criado em</th>
                            <th class="px-4 py-3">Atualizado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($participants) > 0): ?>
                            <?php foreach ($participants as $p): ?>
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-4 py-3"><?php echo $p['id']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['first_name'] . ' ' . $p['last_name']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['cpf']; ?></td>
                                    <td class="px-4 py-3"><?php echo date('d/m/Y', strtotime($p['birth_date'])); ?></td>
                                    <td class="px-4 py-3"><?php echo $p['phone']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['email']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['cep']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['state']; ?></td>
                                    <td class="px-4 py-3"><?php echo $p['neighborhood']; ?></td>
                                    <td class="px-4 py-3"><?php echo date('d/m/Y H:i', strtotime($p['created_at'])); ?></td>
                                    <td class="px-4 py-3"><?php echo $p['updated_at'] ? date('d/m/Y H:i', strtotime($p['updated_at'])) : '-'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="11" class="text-center py-4">Nenhum participante encontrado</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>

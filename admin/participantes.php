<?php
session_start();
require "../db_config.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

// Busca os dados dos participantes
$sql = "SELECT * FROM participants ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$participants = $stmt->fetchAll(PDO::FETCH_ASSOC);

$page = 'participantes';
$user_type = $_SESSION['type'];

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

<body>
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>
        <div class="max-w-full px-4 pb-8 mx-auto py-8">
            <h1 class="text-2xl font-bold mb-4">Participantes Cadastrados</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <th class="px-4 py-3">Bairro</th>
                            <th class="px-4 py-3">Endereço</th>
                            <th class="px-4 py-3">Número</th>
                            <th class="px-4 py-3">Complemento</th>
                            <th class="px-4 py-3">Criado em</th>
                            <th class="px-4 py-3">Atualizado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($participants as $p): ?>
                            <br class="bg-white border-b">
                                <td class="px-4 py-3"><?php echo $p['id']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['first_name'] . ' ' . $p['last_name']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['cpf']; ?></td>
                                <td class="px-4 py-3"><?php echo date('d/m/Y', strtotime($p['birth_date'])); ?></td>
                                <td class="px-4 py-3"><?php echo $p['phone']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['email']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['cep']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['state']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['city']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['neighborhood']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['address']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['number']; ?></td>
                                <td class="px-4 py-3"><?php echo $p['complement'] ?? '-'; ?></td>
                                <td class="px-4 py-3"><?php echo date('d/m/Y H:i', strtotime($p['created_at'])); ?></td>
                                <td class="px-4 py-3">
                                    <?php echo $p['updated_at'] ? date('d/m/Y H:i', strtotime($p['updated_at'])) : '-'; ?>
                                </td>
                                <!-- Adicionando botões para Editar e Excluir -->
                                <td class="px-4 py-3">
                                    <a href="editar_participante.php?id=<?php echo $p['id']; ?>"
                                        class="text-blue-600 hover:underline">Editar</a> </br>
                                    <a href="./controllers/delete_participante.php?id=<?php echo $p['id']; ?>"
                                        class="text-red-600 hover:underline"
                                        onclick="return confirm('Tem certeza que deseja excluir este participante?')">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
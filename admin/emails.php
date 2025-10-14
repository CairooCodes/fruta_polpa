<?php
session_start();
require "../db_config.php";
require "../functions/get.php";

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['id'] ?? null;

$sql = "SELECT name, email, img FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

$emails = getAllEmails(); // função que você criará
$page = 'emails';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Emails - Fruta Polpa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>
        <div class="max-w-7xl px-4 pb-8 mx-auto py-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between py-4 bg-white">
                    <button data-modal-target="addEmailModal" data-modal-show="addEmailModal"
                        class="bg-orange-700 hover:bg-orange-800 text-white font-medium rounded-lg text-sm px-4 py-2">
                        + Adicionar E-mail
                    </button>
                    <div class="relative">
                        <input type="text" id="busca" placeholder="Buscar..."
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50">
                    </div>
                </div>

                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Nome</th>
                            <th class="px-6 py-3">E-mail</th>
                            <th class="px-6 py-3">Celular</th>
                            <th class="px-6 py-3">Estado</th>
                            <th class="px-6 py-3">Criado em</th>
                            <th class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($emails as $email) { ?>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4"><?php echo htmlspecialchars($email['nome']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($email['email']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($email['celular']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($email['estado']); ?></td>
                                <td class="px-6 py-4"><?php echo date('d/m/Y H:i', strtotime($email['created_at'])); ?></td>
                                <td class="px-6 py-4">
                                    <a href="./editar_email.php?id=<?php echo $email['id']; ?>" class="text-blue-600 hover:underline">Editar</a>
                                    <a href="./controllers/delete_email.php?id=<?php echo $email['id']; ?>" class="text-red-600 hover:underline">Excluir</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php include "./components/modal_add_email.php"; ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script>
        const busca = document.querySelector('#busca');
        busca.addEventListener('input', () => {
            const termo = busca.value.toLowerCase();
            document.querySelectorAll('tbody tr').forEach(linha => {
                linha.style.display = linha.textContent.toLowerCase().includes(termo) ? '' : 'none';
            });
        });
    </script>
</body>

</html>
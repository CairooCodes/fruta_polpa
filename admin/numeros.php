<?php
session_start();
require "../db_config.php";
require "../functions/get.php";

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['id'];
$user_type = $_SESSION['type'];

$sql = "SELECT name, email, img FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

$couponCodes = getAllCouponCodes();
$page = 'numeros';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Códigos de Cupons</title>
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
        <div class="max-w-7xl px-4 pb-8 mx-auto py-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex items-center justify-between py-4 bg-white">
                    <h2 class="text-lg font-semibold text-gray-900">Lista de Números da Sorte Gerados</h2>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="busca" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50" placeholder="Buscar código ou nome">
                    </div>
                </div>

                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">Imagem</th>
                            <th class="px-6 py-3">Participante</th>
                            <th class="px-6 py-3">Código</th>
                            <th class="px-6 py-3">Criado em</th>
                            <th class="px-6 py-3">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($couponCodes as $cc) { ?>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">
                                    <?php if ($cc['coupon_image']) : ?>
                                        <img class="w-10 h-10 object-cover rounded" src="<?php echo $cc['coupon_image']; ?>" alt="Imagem do cupom">
                                    <?php else : ?>
                                        <span class="text-gray-400 italic">Sem imagem</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($cc['participant_name']); ?></td>
                                <td class="px-6 py-4 font-mono font-semibold"><?php echo $cc['code']; ?></td>
                                <td class="px-6 py-4"><?php echo date('d/m/Y H:i', strtotime($cc['created_at'])); ?></td>
                                <td class="px-6 py-4">
                                    <!-- Botões opcionais -->
                                    <!-- <a href="#" class="text-blue-600 hover:underline">Editar</a> -->
                                    <!-- <a href="#" class="text-red-600 hover:underline">Excluir</a> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        const inputBusca = document.querySelector('#busca');
        inputBusca.addEventListener('input', () => {
            const termo = inputBusca.value.toLowerCase();
            document.querySelectorAll('table tbody tr').forEach((linha) => {
                linha.classList.toggle('hidden', !linha.textContent.toLowerCase().includes(termo));
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
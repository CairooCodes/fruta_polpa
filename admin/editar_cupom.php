<?php
session_start();
require "../db_config.php";

// Verifica se o ID do cupom foi fornecido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara a consulta para obter os dados do cupom
    $sql = "SELECT * FROM coupons WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $cupom = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o cupom existe
    if (!$cupom) {
        echo "Cupom não encontrado.";
        exit;
    }

    // Recupera o nome do participante baseado no participant_id
    $participant_id = $cupom['participant_id'];
    $sql_participant = "SELECT first_name FROM participants WHERE id = ?";
    $stmt_participant = $pdo->prepare($sql_participant);
    $stmt_participant->execute([$participant_id]);
    $participant = $stmt_participant->fetch(PDO::FETCH_ASSOC);

    // Verifica se o participante existe
    if (!$participant) {
        echo "Participante não encontrado.";
        exit;
    }
} else {
    echo "ID do cupom não especificado.";
    exit;
}

$user_type = $_SESSION['type'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Editar Cupom</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include "components/sidebar.php"; ?>
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
        <?php include "components/header.php"; ?>
        <div class="max-w-7xl px-4 pb-8 mx-auto py-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <form action="./controllers/edit_cupom.php?id=<?php echo $cupom['id']; ?>" method="POST" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">
                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Editar Cupom
                        </h3>
                    </div>
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <input id="id" name="id" type="hidden" value="<?php echo $cupom['id']; ?>">
                            <div class="col-span-6 sm:col-span-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Quantidade</label>
                                <input name="quantity" type="text" value="<?php echo htmlspecialchars($cupom['quantity']); ?>" id="quantity" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" placeholder="Quantidade de polpas" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="img" class="block mb-2 text-sm font-medium text-gray-900">Cupom</label>
                                <?php if (!empty($cupom['image'])): ?>
                                    <img src="./uploads/cupons/<?php echo $cupom['image']; ?>" alt="Imagem do Cupom" class="w-72 h-44 object-fit: cover mb-2">
                                <?php endif; ?>
                                <input type="file" id="image" name="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                                <select name="status" id="status" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5">
                                    <option value="válido" <?php echo $cupom['status'] == 'Válido' ? 'selected' : ''; ?>>Válido</option>
                                    <option value="inválido" <?php echo $cupom['status'] == 'Inválido' ? 'selected' : ''; ?>>Inválido</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="participant_id" class="block mb-2 text-sm font-medium text-gray-900">Participante</label>
                                <input type="text" name="participant_name" value="<?php echo $participant['first_name']; ?>" id="participant_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5" readonly>
                                <input type="hidden" name="participant_id" value="<?php echo $cupom['participant_id']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Atualizar Cupom</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

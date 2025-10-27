<?php
require "config/helper.php";
require "config/url.class.php";
require "db_config.php"; // conexão PDO

$URI = new URI();

// ============================
// 📱 Buscar cupons por telefone (GET)
$phone = $_GET['phone'] ?? null;
$cupons = [];

if ($phone) {
    $stmt = $pdo->prepare("SELECT cc.code, c.created_at 
                           FROM coupon_codes cc
                           JOIN coupons c ON cc.coupon_id = c.id
                           WHERE c.phone = :phone
                           ORDER BY cc.id DESC");
    $stmt->execute([':phone' => $phone]);
    $cupons = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
</head>

<body class="bg-gray-100">
    <?php include "./components/navbar.php"; ?>

    <div class="mx-auto bg-gray-100 pt-10">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow">
            <h2 class="lg:text-3xl text-xl font-semibold mb-4 font-sans text-center">
                Envie seu cupom e participe da promoção 🍓
            </h2>

            <form id="cupomForm" action="./admin/controllers/add_cupom.php" method="post" enctype="multipart/form-data" class="space-y-4">
                <!-- CPF -->
                <div>
                    <label class="block text-sm font-medium">CPF *</label>
                    <input type="text" name="cpf" maxlength="14" placeholder="000.000.000-00"
                        class="w-full border border-gray-200 p-2 rounded-md" required>
                </div>

                <!-- WhatsApp -->
                <div>
                    <label class="block text-sm font-medium">WhatsApp *</label>
                    <div class="flex space-x-2 items-end">
                        <div>
                            <input type="text" id="ddd" name="ddd" maxlength="2" required
                                class="w-20 border border-gray-200 p-2 rounded-md text-center" pattern="\d{2}" placeholder="DDD">
                        </div>
                        <div>
                            <input type="text" value="9" disabled
                                class="w-14 border border-gray-200 p-2 rounded-md text-center bg-gray-100 text-gray-500">
                        </div>
                        <div>
                            <input type="text" id="phone_number" name="phone_number" maxlength="8" required
                                class="border border-gray-200 p-2 rounded-md text-center" pattern="\d{8}" placeholder="Número do WhatsApp">
                        </div>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">Digite o número sem o 9 (ex: 99876543)</p>
                </div>

                <!-- Quantidade -->
                <div>
                    <label class="block text-sm font-medium">Quantas polpas você comprou? *</label>
                    <select name="quantity" class="w-full border border-gray-200 p-2 rounded-md" required>
                        <option value="">Selecione a quantidade</option>
                        <option value="3">3</option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                        <option value="12">12</option>
                        <option value="15">15</option>
                    </select>
                </div>

                <!-- Imagem -->
                <div>
                    <label class="block text-sm font-medium">Foto do Cupom *</label>
                    <input type="file" name="img" accept="image/*"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50" required>
                </div>

                <button type="submit"
                    class="w-full bg-orange-600 text-white py-2 rounded-md hover:bg-orange-700 transition">
                    Enviar Cupom
                </button>
            </form>
        </div>

        <!-- ========================= -->
        <!-- 🧾 Lista de cupons gerados -->
        <!-- ========================= -->
        <?php if ($phone): ?>
            <div class="max-w-3xl mx-auto p-6 mt-6 bg-white rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4 text-center">
                    Cupons do número <span class="text-orange-600"><?php echo htmlspecialchars($phone); ?></span>
                </h3>

                <?php if (count($cupons) > 0): ?>
                    <ul class="divide-y divide-gray-200">
                        <?php foreach ($cupons as $cupom): ?>
                            <li class="py-2 flex justify-between">
                                <span class="font-mono text-gray-800"><?php echo htmlspecialchars($cupom['code']); ?></span>
                                <span class="text-sm text-gray-500"><?php echo date('d/m/Y H:i', strtotime($cupom['created_at'])); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p class="text-center text-gray-500">Nenhum cupom encontrado para este número.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php include "./components/footer.php"; ?>
    <?php include "./components/btn-whatsapp.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</body>

</html>
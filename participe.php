<?php
require "config/helper.php";
require "config/url.class.php";
require "db_config.php";

$URI = new URI();
$phoneParam = $_GET['phone'] ?? null;
$participant = null;
$coupons = [];
$couponCodes = [];

if ($phoneParam) {
    // Buscar participante pelo telefone
    $stmt = $pdo->prepare("SELECT * FROM participants WHERE phone = ?");
    $stmt->execute([$phoneParam]);
    $participant = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($participant) {
        // Buscar cupons do participante
        $stmt = $pdo->prepare("SELECT * FROM coupons WHERE participant_id = ? ORDER BY created_at DESC");
        $stmt->execute([$participant['id']]);
        $coupons = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Buscar todos os códigos dos cupons
        $stmt = $pdo->prepare("
            SELECT c.code, c.created_at, cp.id AS coupon_id 
            FROM coupon_codes c
            INNER JOIN coupons cp ON cp.id = c.coupon_id
            WHERE c.participant_id = ?
            ORDER BY c.created_at DESC
        ");
        $stmt->execute([$participant['id']]);
        $couponCodes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
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
        <!-- Exibir cupons e códigos -->
        <?php if ($participant): ?>
            <div class="max-w-3xl mx-auto mt-8 p-6 bg-white rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-4 text-center text-gray-700">
                    Cupons cadastrados para <?= htmlspecialchars($participant['first_name']) ?>
                </h3>

                <?php if (count($coupons) > 0): ?>
                    <?php foreach ($coupons as $cupom): ?>
                        <div class="border-t border-gray-200 pt-3 mb-4">
                            <p><strong>Data:</strong> <?= date('d/m/Y H:i', strtotime($cupom['created_at'])) ?></p>
                            <p><strong>Quantidade:</strong> <?= $cupom['quantity'] ?></p>
                            <?php if (!empty($cupom['image'])): ?>
                                <p><strong>Imagem:</strong> <a href="<?= $cupom['image'] ?>" target="_blank" class="text-orange-600 underline">Ver cupom</a></p>
                            <?php endif; ?>

                            <h4 class="mt-3 font-semibold">Códigos da sorte:</h4>
                            <ul class="list-disc ml-6 text-orange-600">
                                <?php foreach ($couponCodes as $code): ?>
                                    <?php if ($code['coupon_id'] == $cupom['id']): ?>
                                        <li><?= $code['code'] ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-600 text-center">Nenhum cupom encontrado para este número.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow">

            <h2 class="lg:text-3xl text-xl font-semibold mb-4 text-center text-orange-600 font-sans">
                Envie seu cupom e participe da promoção
            </h2>

            <!-- Formulário -->
            <form id="cupomForm" action="./admin/controllers/add_cupom.php" method="post" enctype="multipart/form-data" class="space-y-4">

                <!-- Nome completo -->
                <div>
                    <label class="block text-sm font-medium">Nome completo *</label>
                    <input type="text" name="first_name" placeholder="Digite seu nome completo"
                        class="w-full border border-gray-200 p-2 rounded-md" required>
                </div>

                <!-- CPF -->
                <div>
                    <label class="block text-sm font-medium">CPF *</label>
                    <input type="text" name="cpf" maxlength="14" placeholder="000.000.000-00"
                        class="w-full border border-gray-200 p-2 rounded-md" required>
                </div>

                <!-- CEP -->
                <div>
                    <label class="block text-sm font-medium">CEP *</label>
                    <input type="text" name="cep" maxlength="9" placeholder="00000-000"
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
                </div>

                <!-- Quantidade -->
                <div>
                    <label class="block text-sm font-medium">Quantas polpas você comprou? *</label>
                    <select name="quantity" class="w-full border border-gray-200 p-2 rounded-md" required>
                        <option value="">Selecione a quantidade</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">
                        Onde você comprou a polpa? *
                    </label>
                    <input
                        type="text"
                        name="complement"
                        placeholder="Ex: Supermercado X, Feira do bairro, Distribuidor Y"
                        class="w-full border border-gray-200 p-2 rounded-md"
                        required>
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
    </div>

    <?php include "./components/footer.php"; ?>
    <?php include "./components/btn-whatsapp.php"; ?>
</body>

</html>
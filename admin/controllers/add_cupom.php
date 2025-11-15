<?php
require "../../db_config.php";

$cpf = $_POST['cpf'] ?? null;
$ddd = preg_replace('/\D/', '', $_POST['ddd']);
$number = preg_replace('/\D/', '', $_POST['phone_number']);
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

if (strlen($ddd) !== 2 || strlen($number) !== 8) {
    echo 'Número de telefone inválido.';
    exit;
}

$phone = '55' . $ddd . $number;

$uploadDir = '../uploads/cupons/';
$imgPath = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
    $imgTmpName = $_FILES['img']['tmp_name'];
    $imgName = $_FILES['img']['name'];
    $uniqueName = uniqid() . '_' . $imgName;

    if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
        $imgPath = 'https://frutapolpa.com.br/admin/uploads/cupons/' . $uniqueName;
    } else {
        echo 'Erro ao fazer o upload da imagem.';
        exit;
    }
}

// ===== Inserir o cupom =====
$sql = "INSERT INTO coupons (cpf, phone, image, quantity, created_at, updated_at) 
        VALUES (?, ?, ?, ?, NOW(), NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$cpf, $phone, $imgPath, $quantity]);

$coupon_id = $pdo->lastInsertId();

// ===== Lógica igual à automação =====
$couponCount = min(intdiv($quantity, 3), 5);

for ($i = 0; $i < $couponCount; $i++) {
    do {
        $code = rand(100000, 999999);
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM coupon_codes WHERE code = ?");
        $stmt->execute([$code]);
        $exists = $stmt->fetchColumn() > 0;
    } while ($exists);

    $sql = "INSERT INTO coupon_codes (coupon_id, code, created_at, updated_at)
            VALUES (?, ?, NOW(), NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$coupon_id, $code]);
}

header('Location: ../../participe.php?phone=' . urlencode($phone));
exit;
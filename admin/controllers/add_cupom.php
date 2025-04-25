<?php
require "../../db_config.php";

$participant_id = $_POST['participant_id'];
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

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

// Inserir o cupom na tabela 'coupons' com quantidade e imagem
$sql = "INSERT INTO coupons (participant_id, image, quantity, created_at, updated_at) 
        VALUES (?, ?, ?, NOW(), NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$participant_id, $imgPath, $quantity]);

$coupon_id = $pdo->lastInsertId();

// Calcular quantidade de códigos a gerar com base na quantidade
$couponCount = 0;
if ($quantity >= 3 && $quantity < 5) {
    $couponCount = 1;
} elseif ($quantity >= 5 && $quantity < 10) {
    $couponCount = 2;
} elseif ($quantity >= 10) {
    $couponCount = 3;
}

// Gerar e salvar os códigos da sorte
for ($i = 0; $i < $couponCount; $i++) {
    $code = rand(100000, 999999);

    $sql = "INSERT INTO coupon_codes (participant_id, coupon_id, code, created_at, updated_at)
            VALUES (?, ?, ?, NOW(), NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$participant_id, $coupon_id, $code]);
}

header('Location: ../cupons.php');
exit;

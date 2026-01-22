<?php
require "../../db_config.php";

// ===============================
// 1️⃣ CAPTURA E VALIDAÇÃO DOS DADOS
// ===============================
$cpf = $_POST['cpf'] ?? null;
$first_name = $_POST['first_name'] ?? null; // nome completo
$cep = $_POST['cep'] ?? null;
$ddd = preg_replace('/\D/', '', $_POST['ddd'] ?? '');
$number = preg_replace('/\D/', '', $_POST['phone_number'] ?? '');
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

if (strlen($ddd) !== 2 || strlen($number) !== 8) {
    echo 'Número de telefone inválido.';
    exit;
}

$phone = '55' . $ddd . $number;

// ===============================
// 2️⃣ SALVAR PARTICIPANTE (OU PEGAR EXISTENTE PELO CPF OU TELEFONE)
// ===============================
try {
    $stmt = $pdo->prepare("SELECT id FROM participants WHERE cpf = ? OR phone = ?");
    $stmt->execute([$cpf, $phone]);
    $existingParticipant = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existingParticipant) {
        $participant_id = $existingParticipant['id'];
    } else {
        $stmt = $pdo->prepare("
            INSERT INTO participants (cpf, first_name, cep, phone, created_at)
            VALUES (?, ?, ?, ?, NOW())
        ");
        $stmt->execute([$cpf, $first_name, $cep, $phone]);
        $participant_id = $pdo->lastInsertId();
    }
} catch (Exception $e) {
    echo "Erro ao salvar participante: " . $e->getMessage();
    exit;
}

// ===============================
// 3️⃣ UPLOAD DA IMAGEM DO CUPOM
// ===============================
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

// ===============================
// 4️⃣ SALVAR CUPOM
// ===============================
try {
    $sql = "INSERT INTO coupons (participant_id, image, quantity, created_at, updated_at) 
            VALUES (?, ?, ?, NOW(), NOW())";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$participant_id, $imgPath, $quantity]);

    $coupon_id = $pdo->lastInsertId();

    // ===============================
    // 5️⃣ GERAR CÓDIGOS DA SORTE
    // ===============================
    $couponCount = intdiv($quantity, 5); // 1 código a cada 5 polpas

    for ($i = 0; $i < $couponCount; $i++) {
        do {
            $code = rand(100000, 999999);
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM coupon_codes WHERE code = ?");
            $stmt->execute([$code]);
            $exists = $stmt->fetchColumn() > 0;
        } while ($exists);

        $sql = "INSERT INTO coupon_codes (participant_id, coupon_id, code, created_at, updated_at)
            VALUES (?, ?, ?, NOW(), NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$participant_id, $coupon_id, $code]);
    }

    // Redireciona de volta para a página de participação
    header('Location: ../../participe.php?success=1&phone=' . urlencode($phone));
    exit;
} catch (Exception $e) {
    echo "Erro ao salvar cupom: " . $e->getMessage();
    exit;
}

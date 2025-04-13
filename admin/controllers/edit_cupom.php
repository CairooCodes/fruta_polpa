<?php
require "../../db_config.php";

if (isset($_GET['id'])) {
    $cupom_id = $_GET['id'];

    $sql = "SELECT * FROM coupons WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cupom_id]);
    $cupom = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$cupom) {
        echo 'Cupom não encontrado.';
        exit;
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $participant_id = $_POST['participant_id'];
        $imgPath = $cupom['image'];

        if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
            $uploadDir = '../uploads/cupons/';
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

        $sql = "UPDATE coupons SET participant_id = ?, image = ?, updated_at = NOW() WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$participant_id, $imgPath, $cupom_id]);

        header('Location: ../cupons.php');
        exit;
    }
} else {
    echo 'ID do cupom não fornecido.';
    exit;
}
?>

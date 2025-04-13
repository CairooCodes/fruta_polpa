<?php
require "../../db_config.php";
require "../../functions/update.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cupom_id = $_POST['id'];
    $participant_id = $_POST['participant_id'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    $uploadDir = '../uploads/cupons/';

    $imgPath = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imgTmpName = $_FILES['image']['tmp_name'];
        $imgName = $_FILES['image']['name'];

        $uniqueName = uniqid() . '_' . $imgName;

        if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
            $imgPath = $uniqueName;
        } else {
            echo 'Erro ao fazer o upload da imagem.';
            exit;
        }
    }

    updateCupom($participant_id, $imgPath, $status, $quantity);
    header('Location: ../cupons.php');
    exit();
} else {
    header('Location: ../cupons.php');
    exit();
}
?>

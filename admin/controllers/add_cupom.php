<?php
require "../../db_config.php";

$participant_id = $_POST['participant_id'];

$uploadDir = '../uploads/cupons/';

$imgPath = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $imgTmpName = $_FILES['img']['tmp_name'];
  $imgName = $_FILES['img']['name'];

  $uniqueName = uniqid() . '_' . $imgName;

  if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
    // Prefixo da URL
    $imgPath = 'https://frutapolpa.com.br/admin/uploads/cupons/' . $uniqueName;
  } else {
    echo 'Erro ao fazer o upload da imagem.';
    exit;
  }
}

$sql = "INSERT INTO coupons (codigo, image, participant_id, status, created_at, updated_at) 
        VALUES (?, ?, ?, 'válido', NOW(), NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([$codigo, $imgPath, $participant_id]);

header('Location: ../cupons.php');
exit;



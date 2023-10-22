<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];

    // Verificar se uma nova imagem de perfil foi enviada
    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $uploadDir = '../uploads/banners/';
      $imgTmpName = $_FILES['img']['tmp_name'];
      $imgName = $_FILES['img']['name'];
      $uniqueName = uniqid() . '_' . $imgName;

      if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
        // Atualizar o caminho da nova imagem no banco de dados
        updateBannerImage($id, $uniqueName);
      } else {
        echo 'Erro ao fazer o upload da imagem de perfil.';
        exit;
      }
    }

    updateBanner($id, $name);
    header('Location: ../banners.php');
    exit();
  }
} else {
  header('Location: ../banners.php');
  exit();
}

<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $product_id = $_POST['product_id'];


    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $uploadDir = '../uploads/receitas/';
      $imgTmpName = $_FILES['img']['tmp_name'];
      $imgName = $_FILES['img']['name'];
      $uniqueName = uniqid() . '_' . $imgName;
      if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
        updateReceitaImage($id, $uniqueName);
      } else {
        echo 'Erro ao fazer o upload da imagem de perfil.';
        exit;
      }
    }


    updateReceita($id, $name, $description, $product_id);
    header('Location: ../receitas.php');
    exit();
  }
} else {
  header('Location: ../receitas.php');
  exit();
}

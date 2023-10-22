<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $categorie_id = $_POST['categorie_id'];

    // Verificar se uma nova imagem de perfil foi enviada
    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $uploadDir = '../uploads/products/';
      $imgTmpName = $_FILES['img']['tmp_name'];
      $imgName = $_FILES['img']['name'];
      $uniqueName = uniqid() . '_' . $imgName;

      if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
        // Atualizar o caminho da nova imagem no banco de dados
        updateProductImage($id, $uniqueName);
      } else {
        echo 'Erro ao fazer o upload da imagem de perfil.';
        exit;
      }
    }

    updateProduct($id, $name, $description, $price, $categorie_id);
    header('Location: ../products.php');
    exit();
  }
} else {
  header('Location: ../products.php');
  exit();
}

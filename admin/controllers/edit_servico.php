<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $page_text1 = $_POST['page_text1'];
    $page_text2 = $_POST['page_text2'];
    $link = $_POST['link'];
    $categorie_id = $_POST['categorie_id'];

    $uploadDir = '../uploads/servicos/';

    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $imgTmpName = $_FILES['img']['tmp_name'];
      $imgName = $_FILES['img']['name'];

      $uniqueName = uniqid() . '_' . $imgName;

      if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
        $imgPath = $uniqueName;
      } else {
        echo 'Erro ao fazer o upload da imagem.';
        exit;
      }
    }

    updateServico($id, $name, $imgPath, $description, $page_text1, $page_text2, $link, $categorie_id);
    header('Location: ../servicos.php');
    exit();
  }
} else {
  header('Location: ../servicos.php');
  exit();
}

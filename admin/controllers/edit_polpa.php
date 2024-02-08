<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $categorie_id = $_POST['categorie_id'];
    $subject = $_POST['subject'];
    $info = $_POST['info'];

    $uploadDir = '../uploads/polpas/';

    $imgPath = null;

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

    updatePolpa($id, $name, $description, $categorie_id, $subject, $info, $imgPath);
    header('Location: ../polpas.php');
    exit();
  }
} else {
  header('Location: ../polpas.php');
  exit();
}

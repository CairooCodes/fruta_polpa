<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$categorie_id = $_POST['categorie_id'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$uploadDir = '../uploads/receitas/';

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

$new_description = $dom->saveHTML();

$sql = "INSERT INTO receitas (name, description, categorie_id, img) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $description,  $categorie_id, $imgPath]);
header('Location: ../receitas.php');

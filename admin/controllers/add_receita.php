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
if (isset($_FILES['imagens']) && !empty($_FILES['imagens']['name'][0])) {
  $totalFiles = count($_FILES['imagens']['name']);
  for ($i = 0; $i < $totalFiles; $i++) {
    $imageTmpName = $_FILES['imagens']['tmp_name'][$i];
    $imageName = $_FILES['imagens']['name'][$i];

    $imageUniqueName = uniqid() . '_' . $imageName;

    if (move_uploaded_file($imageTmpName, $imagesDir . $imageUniqueName)) {
      $imagesPaths[] = $imageUniqueName;
    } else {
      echo 'Erro ao fazer o upload de uma das imagens.';
      exit;
    }
  }
}

$new_description = $dom->saveHTML();

$sql = "INSERT INTO receitas (name, description, categorie_id, img, images) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$imagesPathsString = implode(',', $imagesPaths);
$stmt->execute([$name, $description,  $categorie_id, $imgPath, $imagesPathsString]);
header('Location: ../receitas.php');

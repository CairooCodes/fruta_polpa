<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$uploadDir = '../uploads/products/';

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

$sql = "INSERT INTO products (name, img, description, price) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $imgPath, $description, $price]);  
header('Location: ../products.php');
<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$page_text1 = $_POST['page_text1'];
$page_text2 = $_POST['page_text2'];
$link = $_POST['link'];
$categorie_id = $_POST['categorie_id'];
$icon = $_POST['icon'];

$dom = new DOMDocument();
$dom2 = new DOMDocument();
$dom3 = new DOMDocument();

$dom->loadHTML($description);
$dom2->loadHTML($page_text1);
$dom3->loadHTML($page_text2);

$uploadDir = '../uploads/servicos/';

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
$new_description2 = $dom2->saveHTML();
$new_description3 = $dom3->saveHTML();

$sql = "INSERT INTO services (name, img, description, link, categorie_id, page_text1, page_text2, icon) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $imgPath, $description, $link, $categorie_id, $page_text1, $page_text2, $icon]);
header('Location: ../servicos.php');

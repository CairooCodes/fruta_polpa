<?php

function updateAbout($id, $texto)
{
  global $pdo;
  $stmt = $pdo->prepare("UPDATE about SET texto=:texto WHERE id = :id");
  $stmt->bindParam(':texto', $texto);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

function updateBanner($id, $name)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateBannerImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE banners SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
}

function updateBlog($id, $name, $description, $img)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, description=:description, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updatePolpa($id, $name, $description, $categorie_id, $subject, $info, $img)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, description=:description, categorie_id = :categorie_id, subject=:subject, info=:info, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':info', $info);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, description=:description, categorie_id = :categorie_id, subject=:subject, info=:info WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateCategorie($id, $name)
{
  global $pdo;
  if ($id) {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateReceita($id, $name, $description, $product_id, $img)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE receitas SET name = :name, description=:description, product_id=:product_id, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE receitas SET name = :name, description=:description, product_id=:product_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateRecrutamento($id, $name, $email, $telephone, $city, $status)
{
  global $pdo;
  if ($id) {
    $stmt = $pdo->prepare("UPDATE recruitment SET name = :name, email=:email, telephone = :telephone, city=:city, status=:status WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE recruitment SET name = :name, email=:email, telephone = :telephone, city=:city, status=:status WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

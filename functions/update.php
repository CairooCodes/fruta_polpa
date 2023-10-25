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

function updateBlog($id, $name, $description)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateBlogImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE blogs SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
}

function updateProduct($id, $name, $description, $price, $categorie_id, $subject, $info)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, description=:description, price=:price, categorie_id = :categorie_id, subject=:subject, info=:info, receita=:receita WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':receita', $receita);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, description=:description, price=:price, categorie_id = :categorie_id, subject=:subject, info=:info, receita=:receita WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':info', $info);
    $stmt->bindParam(':receita', $receita);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateProductImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE products SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
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

function updateReceita($id, $name, $description)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE receitas SET name = :name, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE receitas SET name = :name, description=:description WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateReceitaImage($userId, $newImagePath)
{
  global $pdo;

  try {
    $sql = "UPDATE receitas SET img = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$newImagePath, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar a imagem de perfil: ' . $e->getMessage();
  }
}

// Função para atualizar as imagens do usuário
function updateRceitaImages($userId, $newImagesPaths)
{
  global $pdo;

  try {
    // Atualizar o campo de imagens do usuário
    $imagesPathsString = implode(',', $newImagesPaths);
    $sqlUpdate = "UPDATE receitas SET imagens = ? WHERE id = ?";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->execute([$imagesPathsString, $userId]);
  } catch (PDOException $e) {
    echo 'Erro ao atualizar as imagens do usuário: ' . $e->getMessage();
  }
}



<?php

function updateAbout($id, $texto)
{
  global $pdo;
  $stmt = $pdo->prepare("UPDATE about SET texto=:texto WHERE id = :id");
  $stmt->bindParam(':texto', $texto);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

function updateBanner($id, $name, $img)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateBlog($id, $name, $img, $description, $link)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, img=:img, description=:description, link=:link WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE blogs SET name = :name, description=:description, link=:link WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateProduct($id, $name, $img, $description, $price)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, img=:img, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE products SET name = :name, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateMixs($id, $name, $img, $description, $price)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE mixs SET name = :name, img=:img, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE mixs SET name = :name, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}





<?php

function updateBlog($id, $name, $img, $description, $link)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE cursos SET name = :name, img=:img, description=:description, link=:link WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE cursos SET name = :name, description=:description, link=:link WHERE id = :id");
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
    $stmt = $pdo->prepare("UPDATE cursos SET name = :name, img=:img, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE cursos SET name = :name, description=:description, price=:price WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}





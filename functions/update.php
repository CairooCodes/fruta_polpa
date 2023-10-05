<?php
function updateServico($id, $name, $img, $description, $page_text1, $page_text2, $link, $categorie_id)
{
  global $pdo;
  if ($img) {
    $stmt = $pdo->prepare("UPDATE services SET name = :name, img=:img, description=:description, page_text1=:page_text1, page_text2=:page_text2 , link=:link, categorie_id=:categorie_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':page_text1', $page_text1);
    $stmt->bindParam(':page_text2', $page_text2);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE services SET name = :name, description=:description, page_text1=:page_text1, page_text2=:page_text2 , link=:link, categorie_id=:categorie_id WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':page_text1', $page_text1);
    $stmt->bindParam(':page_text2', $page_text2);
    $stmt->bindParam(':link', $link);
    $stmt->bindParam(':categorie_id', $categorie_id);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateCurso($id, $name, $img, $description, $link)
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

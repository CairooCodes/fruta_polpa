<?php
require "../../db_config.php";

if (!empty($_GET['id'])) {
 
  $id = $_GET['id'];
  deleteProduct($id);
  header('Location: ../banners.php');
  exit();
} else {
 
  header('Location: ../banners.php');
  exit();
}

function deleteProduct($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM banners WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

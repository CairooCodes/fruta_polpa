<?php
require "../../db_config.php";


if (!empty($_GET['id'])) {
 
  $id = $_GET['id'];
  deleteProduct($id);
  header('Location: ../dashboard.php');
  exit();
} else {
  
  header('Location: ../dashboard.php');
  exit();
}

function deleteProduct($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

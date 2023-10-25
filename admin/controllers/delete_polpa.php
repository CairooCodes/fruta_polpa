<?php
require "../../db_config.php";


if (!empty($_GET['id'])) {

  $id = $_GET['id'];
  deletePolpa($id);
  header('Location: ../polpas.php');
  exit();
} else {

  header('Location: ../polpas.php');
  exit();
}


function deletePolpa($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}
<?php
require "../../db_config.php";

if (!empty($_GET['id'])) {
  
  $id = $_GET['id'];
  deleteBlog($id);
  header('Location: ../blogs.php');
  exit();
} else {

  header('Location: ../blogs.php');
  exit();
}

function deleteBlog($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

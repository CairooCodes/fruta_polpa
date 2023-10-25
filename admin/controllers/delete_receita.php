<?php
require "../../db_config.php";


if (!empty($_GET['id'])) {
  
  $id = $_GET['id'];
  deleteReceita($id);
  header('Location: ../receitas.php');
  exit();
} else {

  header('Location: ../receitas.php');
  exit();
}


function deleteReceita($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM receitas WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

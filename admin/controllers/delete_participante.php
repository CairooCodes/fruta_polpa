<?php
require "../../db_config.php";


if (!empty($_GET['id'])) {

  $id = $_GET['id'];
  deleteParticipante($id);
  header('Location: ../participantes.php');
  exit();
} else {

  header('Location: ../participantes.php');
  exit();
}


function deleteParticipante($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM participants WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

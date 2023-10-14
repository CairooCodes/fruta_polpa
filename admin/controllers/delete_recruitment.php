<?php
require "../../db_config.php";

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  deleteRecruitment($id);
  header('Location: ../dashboard.php');
  exit();
} else {
  header('Location: ../dashboard.php');
  exit();
}

function deleteRecruitment($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM recruitment WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

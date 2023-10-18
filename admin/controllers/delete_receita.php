<?php
require "../../db_config.php";

// Verificar se o ID do banner foi enviado
if (!empty($_GET['id'])) {
  // Obter o ID do banner
  $id = $_GET['id'];
  deleteReceita($id);
  header('Location: ../receitas.php');
  exit();
} else {
  // Redirecionar para a página de lista de receitas se o ID do banner não for fornecido
  header('Location: ../receitas.php');
  exit();
}

// Função para excluir um banner pelo ID
function deleteReceita($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM receitas WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

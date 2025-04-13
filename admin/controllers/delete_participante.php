<?php
session_start();
require "../db_config.php";

// Verifica se o usuário está logado
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

// Verifica se o ID do participante foi fornecido
if (!isset($_GET['id'])) {
    header('Location: participantes.php');
    exit;
}

$id = $_GET['id'];

// Exclui o participante
$sql = "DELETE FROM participants WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

header('Location: participantes.php');
exit;
?>

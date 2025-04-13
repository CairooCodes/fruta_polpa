<?php
require "../../db_config.php";

// Verifica se o ID do cupom foi fornecido
if (isset($_GET['id'])) {
    $cupom_id = $_GET['id'];

    // Exclui o cupom do banco de dados
    $sql = "DELETE FROM coupons WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cupom_id]);

    header('Location: ../cupons.php');
    exit;
} else {
    echo 'ID do cupom não fornecido.';
    exit;
}
?>

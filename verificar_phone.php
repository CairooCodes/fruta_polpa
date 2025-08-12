<?php
require "db_config.php";
require "config/helper.php";

function verificarTelefone($phone)
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE phone = ?");
    $stmt->execute([$phone]);
    return $stmt->fetchColumn() > 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ddd'], $_POST['phone_number'])) {
    $ddd = preg_replace('/\D/', '', $_POST['ddd']);
    $number = preg_replace('/\D/', '', $_POST['phone_number']);

    // Validação simples
    if (strlen($ddd) !== 2 || strlen($number) !== 8) {
        header("Location: ./participe.php?erro=telefone");
        exit;
    }

    // Monta o telefone no formato do banco
    $phone = '55' . $ddd . $number;

    if (verificarTelefone($phone)) {
        header("Location: ./admin/login.php");
        exit;
    } else {
        header("Location: ./participe.php");
        exit;
    }
} else {
    header("Location: /");
    exit;
}

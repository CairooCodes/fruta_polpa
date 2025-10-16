<?php
require "../../db_config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $enviarAgora = isset($_POST['enviar_agora']) ? 1 : 0;

    // Define status e send_email conforme checkbox
    $status = $enviarAgora ? 1 : 2;
    $send_email = $enviarAgora ? null : ($_POST['send_email'] ?? null);

    $stmt = $pdo->prepare("
        INSERT INTO emails 
          (cpf, nome, email, celular, data_nascimento, sexo, sentimento, estado, cidade, unidade_loja, 
          o_que_deseja, motivo_contato, qual_solicitacao, mensagem, send_email, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $_POST['cpf'] ?? null,
        $_POST['nome'],
        $_POST['email'],
        $_POST['celular'] ?? null,
        $_POST['data_nascimento'] ?? null,
        $_POST['sexo'] ?? null,
        $_POST['sentimento'] ?? null,
        $_POST['estado'] ?? null,
        $_POST['cidade'] ?? null,
        $_POST['unidade_loja'] ?? null,
        $_POST['o_que_deseja'] ?? null,
        $_POST['motivo_contato'] ?? null,
        $_POST['qual_solicitacao'] ?? null,
        $_POST['mensagem'] ?? null,
        $send_email,
        $status
    ]);

    header("Location: ../emails.php");
    exit;
}

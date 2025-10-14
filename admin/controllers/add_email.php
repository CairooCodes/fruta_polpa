<?php
require "../../db_config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("
    INSERT INTO emails 
      (cpf, nome, email, celular, data_nascimento, sexo, sentimento_id, estado, cidade, unidade_loja, 
      o_que_deseja, motivo_contato, qual_solicitacao, mensagem, send_email)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
  ");

    $stmt->execute([
        $_POST['cpf'] ?? null,
        $_POST['nome'],
        $_POST['email'],
        $_POST['celular'] ?? null,
        $_POST['data_nascimento'] ?? null,
        $_POST['sexo'] ?? null,
        $_POST['sentimento_id'] ?? null,
        $_POST['estado'] ?? null,
        $_POST['cidade'] ?? null,
        $_POST['unidade_loja'] ?? null,
        $_POST['o_que_deseja'] ?? null,
        $_POST['motivo_contato'] ?? null,
        $_POST['qual_solicitacao'] ?? null,
        $_POST['mensagem'] ?? null,
        $_POST['send_email'] ?? null
    ]);

    header("Location: ../emails.php");
    exit;
}

<?php
// Arquivo: add_recruitment.php

require '../../vendor/autoload.php'; // Ajuste o caminho conforme sua estrutura

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recebe e valida os dados do formulário
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $office = filter_input(INPUT_POST, 'office', FILTER_SANITIZE_STRING);

    if (!$name || !$email || !$telephone || !$city || !$state || !$office) {
        echo "<script>alert('Por favor, preencha todos os campos corretamente.'); window.history.back();</script>";
        exit;
    }

    // Validação simples do arquivo enviado (curriculo)
    if (
        !isset($_FILES['curriculo']) || 
        $_FILES['curriculo']['error'] !== UPLOAD_ERR_OK || 
        strtolower(pathinfo($_FILES['curriculo']['name'], PATHINFO_EXTENSION)) !== 'pdf'
    ) {
        echo "<script>alert('Erro no envio do currículo. Apenas arquivos PDF são aceitos.'); window.history.back();</script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Config SMTP Locaweb
        $mail->isSMTP();
        $mail->Host = 'email-ssl.com.br';
        $mail->SMTPAuth = true;
        $mail->Username = 'marketing@frutapolpa.com.br';
        $mail->Password = 'Mark2025@';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Remetente e destinatário
        $mail->setFrom('marketing@frutapolpa.com.br', 'Fruta Polpa');
        $mail->addAddress('marketing@frutapolpa.com.br');

        // Anexo
        $mail->addAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = "Novo curriculo enviado por {$name}";

        $body = "
            <h2>Novo currículo enviado</h2>
            <p><strong>Nome:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Telefone:</strong> {$telephone}</p>
            <p><strong>Cidade:</strong> {$city}</p>
            <p><strong>Estado:</strong> {$state}</p>
            <p><strong>Área de Interesse:</strong> {$office}</p>
        ";

        $mail->Body = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();

        echo "<script>alert('Currículo enviado com sucesso! Obrigado pelo seu interesse.'); window.location = '/';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar e-mail: {$mail->ErrorInfo}'); window.history.back();</script>";
    }

} else {
    header('Location: /');
    exit;
}

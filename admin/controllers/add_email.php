<?php
require "../../db_config.php";

// -----------------
// Função WhatsApp
// -----------------
function enviarMensagemWhatsApp($emailId, $pdo)
{
    // Buscar registro salvo
    $stmt = $pdo->prepare("SELECT * FROM emails WHERE id = ?");
    $stmt->execute([$emailId]);
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$dados) {
        return;
    }

    // Montar texto
    $mensagem =
        "📩 *Novo Registro Recebido*\n\n" .
        "CPF: {$dados['cpf']}\n" .
        "Nome: {$dados['nome']}\n" .
        "E-mail: {$dados['email']}\n" .
        "Celular: {$dados['celular']}\n" .
        "Nascimento: {$dados['data_nascimento']}\n" .
        "Sexo: {$dados['sexo']}\n" .
        "Sentimento: {$dados['sentimento']}\n" .
        "Estado: {$dados['estado']}\n" .
        "Cidade: {$dados['cidade']}\n" .
        "Unidade da Loja: {$dados['unidade_loja']}\n" .
        "O que deseja: {$dados['o_que_deseja']}\n" .
        "Motivo do contato: {$dados['motivo_contato']}\n" .
        "Solicitação: {$dados['qual_solicitacao']}\n" .
        "Mensagem: {$dados['mensagem']}\n" .
        "Enviar em: {$dados['send_email']}\n" .
        "Status: {$dados['status']}\n\n" .
        "📝 *Por favor, preencha também o formulário no portal Assaí:*\n" .
        "https://www.assai.com.br/espaco-do-cliente\n";

    // Credenciais Z-API
    $baseUrl     = "https://api.z-api.io";
    $instanceId  = "3E981AAA811AA13E7D7B3A9184538B5F";
    $token       = "3467A2CF679A6A199B064ED1";
    $clientToken = "F0da12f62c208459eab9b5139d3732df5S";

    $url = "$baseUrl/instances/$instanceId/token/$token/send-text";

    $numeros = [
        "558699598080",
        "558699206955"
    ];

    foreach ($numeros as $numero) {

        $payload = [
            "phone"   => $numero,
            "message" => $mensagem
        ];

        // CURL
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                "Client-Token: $clientToken",
                "Content-Type: application/json"
            ],
            CURLOPT_POSTFIELDS => json_encode($payload)
        ]);

        curl_exec($ch);
        curl_close($ch);
    }
}



// -----------------
// Salvar no banco
// -----------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $enviarAgora = isset($_POST['enviar_agora']) ? 1 : 0;

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

    // ID do registro inserido
    $id = $pdo->lastInsertId();

    // Enviar WhatsApp
    enviarMensagemWhatsApp($id, $pdo);

    header("Location: ../emails.php");
    exit;
}

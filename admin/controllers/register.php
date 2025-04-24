<?php
require "../../db_config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cpf = $_POST["cpf"] ?? null;
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"] ?? null;
    $birth_date = $_POST["birth_date"] ?? null;
    $ddd = preg_replace('/\D/', '', $_POST['ddd']);
    $number = preg_replace('/\D/', '', $_POST['phone_number']);

    // Valida DDD e número
    if (strlen($ddd) !== 2 || strlen($number) !== 8) {
        echo json_encode(['error' => true, 'message' => 'Número de telefone inválido.']);
        exit;
    }

    // Concatena com o prefixo internacional, sem o 9 fixo
    $phone = '55' . $ddd . $number;
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $state = $_POST["state"] ?? null;
    $city = $_POST["city"];
    $neighborhood = $_POST["neighborhood"];
    $address = $_POST["address"] ?? null;
    $number = $_POST["number"] ?? null;
    $complement = $_POST["complement"] ?? null;
    $password = $_POST["password"];

    // Verifica se o CPF já está cadastrado
    $stmt = $pdo->prepare("SELECT cpf FROM users WHERE cpf = ?");
    $stmt->execute([$cpf]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(['error' => true, 'message' => 'CPF já cadastrado!']);
        exit;
    }

    // Insere participante na tabela participants
    $sql = "INSERT INTO participants (cpf, first_name, last_name, birth_date, phone, email, cep, state, city, neighborhood, address, number, complement) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cpf, $first_name, $last_name, $birth_date, $phone, $email, $cep, $state, $city, $neighborhood, $address, $number, $complement]);

    // Criptografa a senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insere usuário na tabela users (agora também com email)
    $sql_user = "INSERT INTO users (name, cpf, email, password, type) VALUES (?, ?, ?, ?, 2)";
    $stmt = $pdo->prepare($sql_user);
    $stmt->execute([$first_name, $cpf, $email, $hashed_password]);

    // Recupera o ID do usuário recém-criado
    $user_id = $pdo->lastInsertId();

    // Salva logs
    $action = "register";
    $date_time = date('Y-m-d H:i:s');
    $sql_log = "INSERT INTO user_logs (user_id, action, date_time) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql_log);
    $stmt->execute([$user_id, $action, $date_time]);

    // Inicia a sessão e define as variáveis (opcional se for redirecionar direto pro login)
    $_SESSION['id'] = $user_id;
    $_SESSION['name'] = $first_name . ' ' . $last_name;
    $_SESSION['cpf'] = $cpf;

    // Redireciona para a tela de login
    header('Location: ../login.php');
    exit;
}

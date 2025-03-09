<?php
require "../../db_config.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cpf = $_POST["cpf"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $birth_date = $_POST["birth_date"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    $neighborhood = $_POST["neighborhood"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $complement = $_POST["complement"];
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

    // Insere usuário na tabela users
    $sql_user = "INSERT INTO users (cpf, password, type) VALUES (?, ?, 2)";
    $stmt = $pdo->prepare($sql_user);
    $stmt->execute([$cpf, $hashed_password]);

    // Recupera o ID do usuário recém-criado
    $user_id = $pdo->lastInsertId();

    // Salva logs
    $action = "register";
    $date_time = date('Y-m-d H:i:s');
    $sql_log = "INSERT INTO user_logs (user_id, action, date_time) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql_log);
    $stmt->execute([$user_id, $action, $date_time]);

    // Inicia a sessão e define as variáveis
    $_SESSION['id'] = $user_id;
    $_SESSION['name'] = $first_name . ' ' . $last_name;
    $_SESSION['cpf'] = $cpf;

    // Redireciona para o dashboard
    header('Location: ../dashboard.php');
    exit;
}

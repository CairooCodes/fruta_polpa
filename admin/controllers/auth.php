<?php
require "../../db_config.php";
session_start();

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($login) || empty($password)) {
    echo json_encode(['error' => true, 'message' => 'Todos os campos são obrigatórios!']);
    exit;
}

// Verifica se é e-mail
$isEmail = filter_var($login, FILTER_VALIDATE_EMAIL);
$searchField = $isEmail ? 'email' : 'phone';

if (!$isEmail) {
    // Limpa tudo que não for número
    $login = preg_replace('/\D/', '', $login);

    // Adiciona o 55 se não tiver
    if (substr($login, 0, 2) !== '55') {
        $login = '55' . $login;
    }

    // Agora temos login como 55 + DDD + número

    $loginSemNove = $login;

    // Verifica se tem 9 dígitos após o DDD (ex: 5586999598080)
    if (preg_match('/^55\d{2}9\d{8}$/', $login)) {
        // Remove o 9 após o DDD
        $loginSemNove = substr($login, 0, 5) . substr($login, 6);
    }
}

try {
    $sql = "SELECT id, name, email, phone, password, type FROM users WHERE $searchField = ? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$isEmail ? $login : $loginSemNove]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Se não achou com número sem o 9, tenta com o número original
    if (!$user && !$isEmail) {
        $stmt->execute([$login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    if (!$user || !password_verify($password, $user['password'])) {
        header('Location: ../login.php?login=failed');
        exit;
    }

    session_regenerate_id(true);
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['type'] = $user['type'];

    // Registro de log
    $sql_log = "INSERT INTO user_logs (user_id, action, date_time) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql_log);
    $stmt->execute([$user['id'], 'login', date('Y-m-d H:i:s')]);

    header('Location: ../dashboard.php');
    exit;
} catch (PDOException $e) {
    echo json_encode(['error' => true, 'message' => 'Erro no banco de dados: ' . $e->getMessage()]);
    exit;
}

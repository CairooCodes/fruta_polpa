<?php
require "../../db_config.php";
session_start();

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($login) || empty($password)) {
    echo json_encode(['error' => true, 'message' => 'Todos os campos são obrigatórios!']);
    exit;
}

// Verifica se o login é e-mail ou número
$isEmail = filter_var($login, FILTER_VALIDATE_EMAIL);
$searchField = $isEmail ? 'email' : 'phone';

// Ajusta número de telefone se necessário
if (!$isEmail && str_starts_with($login, '55')) {
    $login = preg_replace('/[^0-9]/', '', $login); // remove tudo que não for número
}

try {
    $sql = "SELECT id, name, email, phone, password, type FROM users WHERE $searchField = ? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

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

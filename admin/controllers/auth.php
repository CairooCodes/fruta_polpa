<?php
require "../../db_config.php";
session_start();

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || empty($password)) {
    echo json_encode(['error' => true, 'message' => 'Todos os campos são obrigatórios!']);
    exit;
}

try {
    $sql = "SELECT id, name, email, password, type FROM users WHERE email = ? LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {
        header('Location: ../login.php?login=failed');
        exit;
    }

    // Regenera o ID da sessão para segurança
    session_regenerate_id(true);

    // Armazena os dados do usuário na sessão
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['type'] = $user['type']; // Agora type será salvo corretamente

    // Registro de login no log
    $sql_log = "INSERT INTO user_logs (user_id, action, date_time) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql_log);
    $stmt->execute([$user['id'], 'login', date('Y-m-d H:i:s')]);

    header('Location: ../dashboard.php');
    exit;
} catch (PDOException $e) {
    echo json_encode(['error' => true, 'message' => 'Erro no banco de dados: ' . $e->getMessage()]);
    exit;
}

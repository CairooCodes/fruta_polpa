<?php
// Incluir arquivos de configuração e funções necessárias
require "db_config.php";
require "config/helper.php";

// Função para verificar se o CPF existe no banco de dados
function verificarCPF($cpf) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE cpf = ?");
    $stmt->execute([$cpf]);
    return $stmt->fetchColumn() > 0;
}

// Verificar se o CPF foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cpf'])) {
    $cpf = preg_replace('/\D/', '', $_POST['cpf']); // Remover caracteres não numéricos

    // Verificar se o CPF é válido
    if (verificarCPF($cpf)) {
        header("Location: ./admin/login.php");
        exit;
    } else {
        header("Location: ./participe.php");
        exit;
    }
} else {
    // Redirecionar para a página inicial se o acesso for direto
    header("Location: /");
    exit;
}
?>

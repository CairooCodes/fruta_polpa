<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$cnpj = $_POST['cnpj'];
// $description = $_POST['description'];
$type = $_POST['type'];
$sql = "INSERT INTO leads (name, email, telephone, cnpj, description, type) VALUES (?,?,?,?,? )";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $telephone, $cnpj, $type]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado pelo contato, em breve entraremos em contato');
</script>
");

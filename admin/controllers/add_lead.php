<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['celular'] ?? '';
$segmento = $_POST['segmento'] ?? '';
$type = $_POST['type'];
$sql = "INSERT INTO leads (name, email, celular, segmento, type) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $celular, $segmento, $type]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado pelo cadastro, em breve entraremos em contato');
</script>
");

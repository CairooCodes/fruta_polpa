<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$city = $_POST['city'];
$state = $_POST['state'];
$office = $_POST['office'];
$curriculo = $_POST['curriculo'];
$type = $_POST['type'];
$sql = "INSERT INTO recruitment (name, email, telephone, city, state, office, curriculo, type) VALUES (?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $telephone, $city, $state, $office, $curriculo, $type]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado pelo cadastro, em breve entraremos em contato');
</script>
");

<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$city = $_POST['city'];
$state = $_POST['state'];
$office = $_POST['office'];
$type = $_POST['type'];
$sql = "INSERT INTO recruitment (name, email, telephone, city, state, office, type) VALUES (?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $telephone, $city, $state, $office, $type]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado pelo cadastro, em breve entraremos em contato');
</script>
");

<?php
require "../../db_config.php";
$name = $_POST['name'];
$sql = "INSERT INTO categories (name) VALUES (?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name]);
header('Location: ../categorias.php');

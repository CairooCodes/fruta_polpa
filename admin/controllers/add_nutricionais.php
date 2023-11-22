<?php
require "../../db_config.php";
$name = $_POST['valor_energetico'];
$email = $_POST['carboidratos'];
$telephone = $_POST['proteinas'];
$city = $_POST['gorduras_totais'];
$state = $_POST['gorduras_saturadas'];
$office = $_POST['gorduras_trans'];
$curriculo = $_POST['fibra_alimentar'];
$type = $_POST['sodio'];
$type = $_POST['calcio'];
$type = $_POST['ferro'];
$sql = "INSERT INTO nutricionais (valor_energetico, carboidratos, proteinas, gorduras_totais, gorduras_saturadas, gorduras_trans, fibra_alimentar, sodio, calcio, ferro) VALUES (?,?,?,?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$valor_energetico, $carboidratos, $proteinas, $gorduras_totais, $gorduras_saturadas, $gorduras_trans, $fibra_alimentar, $sodio, $calcio, $ferro, $product_id]);
header('Location: ../nutricionais.php');
<?php
require "../../db_config.php";
$valor_energetico = $_POST['valor_energetico'];
$valor_energeticovd = $_POST['valor_energeticovd'];
$carboidratos = $_POST['carboidratos'];
$carboidratosvd = $_POST['carboidratosvd'];
$acucares_totais = $_POST['acucares_totais'];
$acucares_totaisvd = $_POST['acucares_totaisvd'];
$acucares_adicionados = $_POST['acucares_adicionados'];
$acucares_adicionadosvd = $_POST['acucares_adicionadosvd'];
$proteinas = $_POST['proteinas'];
$proteinasvd = $_POST['proteinasvd'];
$gorduras_totais = $_POST['gorduras_totais'];
$gorduras_totaisvd = $_POST['gorduras_totaisvd'];
$gorduras_saturadas = $_POST['gorduras_saturadas'];
$gorduras_saturadasvd = $_POST['gorduras_saturadasvd'];
$gorduras_trans = $_POST['gorduras_trans'];
$gorduras_transvd = $_POST['gorduras_transvd'];
$fibras_alimentares = $_POST['fibras_alimentares'];
$fibras_alimentaresvd = $_POST['fibras_alimentaresvd'];
$sodio = $_POST['sodio'];
$sodiovd = $_POST['sodiovd'];
$product_id = $_POST['product_id'];

$sql = "INSERT INTO nutri (valor_energetico, valor_energeticovd, carboidratos, carboidratosvd, acucares_totais,  acucares_totaisvd, acucares_adicionados, acucares_adicionadosvd, proteinas, proteinasvd, gorduras_totais, gorduras_totaisvd, gorduras_saturadas, gorduras_saturadasvd, gorduras_trans, gorduras_transvd, fibras_alimentares, fibras_alimentaresvd, sodio, sodiovd, product_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$valor_energetico, $valor_energeticovd, $carboidratos, $carboidratosvd, $acucares_totais, $acucares_totaisvd, $acucares_adicionados, $acucares_adicionadosvd, $proteinas, $proteinasvd, $gorduras_totais, $gorduras_totaisvd, $gorduras_saturadas, $gorduras_saturadasvd, $gorduras_trans, $gorduras_transvd, $fibras_alimentares, $fibras_alimentaresvd, $sodio, $sodiovd, $product_id]);
header('Location: ../nutricionais.php');
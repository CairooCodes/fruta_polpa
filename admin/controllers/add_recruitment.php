<?php
require "../../db_config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$city = $_POST['city'];
$state = $_POST['state'];
$office = $_POST['office'];
$type = $_POST['type'];

$uploadDir = '../uploads/curriculos/';
$curriculoPath = null;

if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] == UPLOAD_ERR_OK) {
    $fileTmpName = $_FILES['curriculo']['tmp_name'];
    $fileName = $_FILES['curriculo']['name'];

    $uniqueName = uniqid() . '_' . $fileName;

    if (move_uploaded_file($fileTmpName, $uploadDir . $uniqueName)) {
        $curriculoPath = $uniqueName;
    } else {
        echo 'Erro ao fazer o upload do currículo.';
        exit;
    }
} else {
    echo 'Nenhum currículo enviado ou erro no upload.';
    exit;
}

$sql = "INSERT INTO recruitment (name, email, telephone, city, state, office, curriculo, type)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $telephone, $city, $state, $office, $curriculoPath, $type]);

echo ("
<script>
  alert('Obrigado pelo cadastro, em breve entraremos em contato');
  window.location = '../../home.php';
</script>
");

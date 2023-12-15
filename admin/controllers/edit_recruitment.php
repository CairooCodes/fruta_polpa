<?php
require "../../db_config.php";
require "../../functions/update.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $city = $_POST['city'];
    $status = $_POST['status'];

    updateRecrutamento($id, $name, $email, $telephone, $city, $status);
    header('Location: ../trabalhe-conosco.php');
    exit();
}

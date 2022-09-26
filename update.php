<?php
require_once 'config/connection.php';

$id = $_POST['id'];
$brand = $_POST['brand'];
$name = $_POST['name'];
$km = $_POST['km'];


$stmt = $conn->prepare("UPDATE `cars` SET brand=?,name=?,km=? WHERE id = $id");
if($stmt->execute((array($brand, $name, $km)))){
    header("location: index.php");
}


?>
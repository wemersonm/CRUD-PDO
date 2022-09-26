<?php


require_once 'config/connection.php';

if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $name = $_POST['name'];
    $km = $_POST['km'];

    $sql = $conn->prepare("INSERT INTO `cars` VALUES(null,?,?,?)");
    if($sql->execute((array($brand, $name, $km)))){
        header("location:index.php");
    }
    
}
?>
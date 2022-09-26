<?php

require_once 'config/connection.php';

$id = intval($_GET['id']);



$stmt = $conn->prepare("DELETE FROM `cars` WHERE id = ?");
if($stmt->execute((array($id)))){
    header("location: index.php");
}

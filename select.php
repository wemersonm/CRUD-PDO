<?php
require_once 'config/connection.php';

    $stmt = $conn->prepare("SELECT * FROM `cars`");
    $stmt->execute();
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

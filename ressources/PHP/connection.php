<?php 

$dblogin = "phpmyadmin";
$dbpass = "admin";

try {
    $conn = new PDO("mysql:host=localhost;dbname=video_games;charset=utf8", $dblogin, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}
<?php 

$jeux = $_POST['jeux'];
$prix = $_POST['prix'];
$release = $_POST['release'];
$genre = $_POST['genre'];
$origine = $_POST['origine'];
$mode = $_POST['mode'];
$connexion = $_POST['connexion'];

$dblogin = "phpmyadmin";
$dbpass = "admin";

// $jeux = "Witcher";
// $prix = "49.99";
// $upload = "25-09-2019";
// $genre = "RPG";
// $origine = "US";
// $mode = "Multiplayer";

try {
    $conn = new PDO("mysql:host=localhost;dbname=video_games;charset=utf8", $dblogin, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

$sql = $conn->prepare("INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode, connexion) VALUES (:jeux,:prix,:release,:genre,:origine,:mode,:connexion)");
$sql->bindValue(":jeux", $jeux);
$sql->bindValue(":prix", $prix);
$sql->bindValue(":release", $release);
$sql->bindValue(":genre", $genre);
$sql->bindValue(":origine", $origine);
$sql->bindValue(":mode", $mode);
$sql->bindValue(":connexion", $connexion);

$request = $sql->execute();

if ($request === true){
    echo("Youpi c'est enregistré");
} else {
    echo "ERROR : ";
}


$conn -> close();
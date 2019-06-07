<?php 
$jeux = $_POST['jeux'];
$prix = $_POST['prix'];
$release = $_POST['release'];
$genre = $_POST['genre'];
$origine = $_POST['origine'];
$mode = $_POST['mode'];
$connexion = $_POST['connexion'];
$plateforme = $_POST['plateforme'];
$description = $_POST['description'];
//extract($_POST);

include 'connection.php';

$sql = $conn->prepare("INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode, connexion, plateforme, description) VALUES (:jeux,:prix,:release,:genre,:origine,:mode,:connexion, :plateforme, :description)");
$sql->bindValue(":jeux", $jeux);
$sql->bindValue(":prix", $prix);
$sql->bindValue(":release", $release);
$sql->bindValue(":genre", $genre);
$sql->bindValue(":origine", $origine);
$sql->bindValue(":mode", $mode);
$sql->bindValue(":connexion", $connexion);
$sql->bindValue(":plateforme", $plateforme);
$sql->bindValue(":description", $description);
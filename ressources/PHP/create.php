<?php 

require 'config.php';

$jeux = $_POST['jeux'];
$prix = $_POST['prix'];
$upload = $_POST['upload'];
$genre = $_POST['genre'];
$origine = $_POST['origine'];
$mode = $_POST['mode'];
$connexion = $_POST['connexion'];

$conn = new PDO($dbtype. ": dbname=".$dbname.";host=".$host, $dblogin, $dbpass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully<br>";
}

$sql->bindValue(":jeux", $jeux);
$sql->bindValue(":prix", $prix);
$sql->bindValue(":upload", $upload);
$sql->bindValue(":genre", $genre);
$sql->bindValue(":origine", $origine);
$sql->bindValue(":mode", $mode);
$sql->bindValue(":connexion", $connexion);

$sql = $conn->prepare("INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode) VALUES (:jeux, :prix, :upload, :genre, :origine,:mode)");



$request = $sql->execute();

if ($request === true){
	echo("Youpi c'est enregistré");
} else {
	echo "ERROR : " .$sql. "<br>". $conn->error;
}


// if ($conn -> query($sql) === TRUE) {
// 	echo "Identifiants de connexions enregistrés";
// } else{
// 	echo "ERROR : " .$sql. "<br>". $conn->error;
// }	 					    			


$conn -> close();
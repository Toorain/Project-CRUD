<?php 

$dbtype = 'mysql';
$host = 'localhost';
$dbname = 'video_games';
$dblogin = 'phpmyadmin';
$dbpass = 'admin';

$jeux = $_POST['jeux'];
$prix = $_POST['prix'];
$date = $_POST['date'];
$genre = $_POST['genre'];
$origine = $_POST['origine'];
$mode = $_POST['mode'];
$connexion = $_POST['connexion'];


//include 'ressources/PHP/config.php';
$conn = new PDO($dbtype. ": dbname=".$dbname.";host=".$host, $dblogin, $dbpass);
// $conn = new mysqli($host, $dblogin, $dbpass);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully";
}


$sql = "INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode) VALUES ('$jeux', '$prix', '$date', '$genre', '$origine', '$mode')";

if ($conn -> query($sql) === TRUE) {
	echo "Identifiants de connexions enregistrés";
} else{
	echo "ERROR : " .$sql. "<br>". $conn ->error;
}	 					    			
// $sql = "SELECT * FROM vg_general";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "Titre: " . $row["titre"]. " - Prix: " . $row["prix"]. " Date de sortie : " . $row["date_de_sortie"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

$conn -> close();
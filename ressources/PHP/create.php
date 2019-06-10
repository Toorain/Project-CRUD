<?php 


include 'connection.php';
include 'prepare.php';


$sql = $conn->prepare("INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode, connexion, plateforme, description) VALUES (:jeux,:prix,:release,:genre,:origine,:mode,:connexion, :plateforme, :description)");
$sql->bindValue(":jeux", $jeux);
$sql->bindValue(":prix", $prix);
$sql->bindValue(":release", $release);
$sql->bindValue(":genre", $genre);
$sql->bindValue(":origine", $origine);
$sql->bindValue(":mode", $mode);
$sql->bindValue(":connexion", $connexion);
$sql->bindValue(":plateforme", implode("/", $plateforme));
$sql->bindValue(":description", $description);

$request = $sql->execute();

if ($request === true){
    header('Location:../../index.php?refresh=ok');
} else {
    echo "ERROR : ";
}

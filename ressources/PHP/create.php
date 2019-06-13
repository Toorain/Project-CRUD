<?php 
/*
 * CREATE.PHP FILE
 */
include 'connection.php';
include 'prepare.php';

$sql = $conn->prepare("INSERT INTO vg_general (titre, prix, date_de_sortie, genre, origine, mode, connexion, plateforme, description) VALUES (:jeux,:prix,:release,:genre,:origine,:mode,:connexion, :plateforme, :description)");
$sql->bindValue(":jeux", $jeux);
// Vérifie si $prix est pas vide car la Database attend un float comme valeur
if (!empty($prix)) {
	$sql->bindValue(":prix", $prix);
}
// Si $prix est vide mettre 0 pour bien définir que c'est un nombre est non un chaine vide sinon conflit
else {
	$sql->bindValue(":prix", 0);
}
$sql->bindValue(":release", $release);
$sql->bindValue(":genre", $genre);
$sql->bindValue(":origine", $origine);
$sql->bindValue(":mode", $mode);
$sql->bindValue(":connexion", $connexion);
// Verifie si variable $plateforme est différent de vide sinon ça provoque un conflit avec la méthode implode
if (!empty($plateforme)) {
	$sql->bindValue(":plateforme", implode("/", $plateforme));
}
// Si $plateforme est vide alors ce n'est pas un tableau donc pas besoin de la méthode implode
else {
	$sql->bindValue(":plateforme", $plateforme);
}
$sql->bindValue(":description", $description);


if (empty($jeux) || (empty($release))) {	
	header('Location:../../index.php?update=empty');
} else {
	$request = $sql->execute();	
	if ($request === true){
		header('Location:../../index.php?update=refresh');
	} else {
		echo "ERROR : ";
	}
}


	
	

<?php
/*
 * UPDATE.PHP FILE
 */
include 'connection.php';
include 'prepare.php';
/*
 * Requete SQL pour récupérer toutes les infos d'un jeu avec son ID
 */
if (!empty($_POST['modify'])) {
	$sql=$conn->prepare(
		'SELECT * 
		FROM vg_general 
		WHERE id = :id'
	);
	$sql->execute(array(':id' => $_POST['modify']));
	$requestUpdate = $sql->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_POST['btn-send'])) {
	if (!empty($_POST) && $_POST['btn-send'] == "Update") {
		try{
			$sql = $conn->prepare('UPDATE vg_general 
				SET titre = :titre,
				prix = :prix,
				date_de_sortie = :release,
				genre = :genre,
				origine = :origine,
				mode = :mode,
				connexion = :connexion,
				plateforme = :plateforme,
				description = :description
				WHERE id = :id');

			$sql->bindValue(":titre", $jeux);
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
			$sql->bindValue(":id", $_POST['jeux_id']);

			$requestTest = $sql->execute();	

			if ($requestTest){
				header('Location:../../index.php?update=ok');

			} else {
				echo "ERROR : ";
			}
		} catch(Exception $e){
			echo $e->getMessage();
		}
	}
}

//header('Location:../../index.php?update=ok');
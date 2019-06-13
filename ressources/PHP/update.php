<?php
/*
 * UPDATE.PHP FILE
 */
include 'prepare.php';
global $requestUpdate;
$varTest = "I'm here and I'm a variable";
var_dump($_POST['modify']);
/*
 * Requete SQL pour récupérer toutes les infos d'un jeu avec son ID
 */
//if (!empty($_POST['modify'])) {
	$sql=$conn->prepare(
		'SELECT * 
		FROM vg_general 
		WHERE id = :id'
	);
	$sql->execute(array(':id' => 122));
	$requestUpdate = $sql->fetchAll(PDO::FETCH_ASSOC);
//}



	print_r($request);
}

//header('Location:../../index.php?update=ok');
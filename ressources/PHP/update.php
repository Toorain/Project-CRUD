<?php
/*
 * UPDATE.PHP FILE
 */
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



	print_r($request);
}

//header('Location:../../index.php?update=ok');
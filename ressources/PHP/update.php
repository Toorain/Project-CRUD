<?php 

include 'connection.php';
/*
 * Requete SQL pour récupérer toutes les infos d'un jeu avec son ID
 */

$sql=$conn->prepare(
    'SELECT * 
    FROM vg_general 
    WHERE id = :id'
);

$sql->execute(array(':id' => $_POST['modify']));
$request = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($request);


<?php

include 'connection.php';

if (isset($_POST['btn-send'])) {
	if (!empty($_POST) && $_POST['btn-send'] == "Send") { 
		$jeux = $_POST['jeux'];
		$prix = $_POST['prix'];
		$release = $_POST['release'];
		$genre = $_POST['genre'];
		$origine = $_POST['origine'];
		$mode = $_POST['mode'];
		$connexion = $_POST['connexion'];
		$plateforme = $_POST['plateforme'];
		$description = $_POST['description'];
	}
}

//extract($_POST);



<?php
/*
 * PREPARE.PHP FILE
 */
if (isset($_POST['btn-send'])) {
    if (!empty($_POST) && ($_POST['btn-send'] == "Send" || $_POST['btn-send'] == "Update")) { 
        $jeux = $_POST['jeux'];
        $prix = $_POST['prix'];
        $release = $_POST['release'];
        $genre = $_POST['genre'];
        $origine = $_POST['origine'];
        $mode = $_POST['mode'];
        $connexion = $_POST['connexion'];
        // Vérifie si $_POST['plateforme'] n'est pas vide car si je ne clique sur aucun checkbox il n'apparaitra pas dans le tableau $_POST[] et me retournera une alert.
        if (!empty($_POST['plateforme'])) {
            $plateforme = $_POST['plateforme'];
        }
        // Si $_POST['plateforme'] vide alors mettre la variable $plateforme à vide 
        else {
            $plateforme = "";
        }
        $description = $_POST['description'];
    }
}

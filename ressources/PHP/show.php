<?php 
include 'connection.php';
include 'prepare.php';
include 'update.php';

// On recupere tout le contenu de la table 
$tab = $conn->query('SELECT * FROM vg_general');

// On affiche le resultat
while ($data = $tab->fetch(PDO::FETCH_ASSOC))
{
    
    echo "<tr>";
    echo "<td> ".$data['titre']." </td>";
    echo "<td> ".$data['prix']." </td>";
    echo "<td> ".$data['date_de_sortie']." </td>";
    echo "<td> ".$data['genre']." </td>";
    echo "<td> ".$data['origine']." </td>";
    echo "<td> ".$data['mode']." </td>";
    echo "<td> ".$data['connexion']." </td>";
    echo "<td> ".$data['image']." </td>";
    echo "<td> ".$data['plateforme']." </td>";
    echo "<td> ".$data['description']." </td>";
    echo "<td><form action=\"ressources/PHP/delete.php\" method=\"POST\"><button type=\"submit\" value=".$data['id']." id=\"delete\" name=\"delete\" class=\"btn btn-danger\">Delete</button></form></td>";
    echo "<td><form action=\"index.php?action=update\" method=\"POST\"><button type=\"submit\" value=".$data['id']." id=\"modify\" name=\"modify\" class=\"btn btn-warning modify\" data-toggle=\"modal\" data-target=\"#modifyModal\">Modify</button></form></td>";
    echo "</tr>";     
}

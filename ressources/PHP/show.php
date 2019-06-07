<?php 

include 'prepare.php';

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
    echo "</tr>";     
}

<?php 
require "connection.php";

$del = $conn->prepare("DELETE FROM vg_general WHERE id = ?");

$request = $del->execute([$_POST['delete']]);

if ($request === true) {
	header('Location:../../index.php?update=delete');
}
else {
	echo("Ooops ! something wrong !");
}





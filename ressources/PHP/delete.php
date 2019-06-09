<?php 
require_once("connection.php");

$del = $conn->prepare("DELETE FROM vg_general WHERE id = ?");

$request = $del->execute([$_POST['delete']]);

var_dump($del);

if ($request === true) {
	header('Location:../../index.php?delete=ok');
}
else {
	echo("Ooops ! something wrong !");
}





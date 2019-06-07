<?php 

include 'prepare.php';

$request = $sql->execute();

if ($request === true){
    header('Location:../../index.php?refresh=ok&test=youpi');
} else {
    echo "ERROR : ";
}

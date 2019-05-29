<?php
include("class.php");
$nuevo = new actualizarA();
$nuevo -> update($_POST["codA"],$_POST["nom"],$_POST["tit"],$_POST["cont"],$_POST["price"],$_POST["codC"]);
?>
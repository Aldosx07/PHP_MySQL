<?php
include("class.php");
$nuevo = new insertarA();
$nuevo -> enviar($_POST["nom"],$_POST["tit"],$_POST["cont"],$_POST["price"],$_POST["codC"]);
?>
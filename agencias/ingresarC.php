<?php
include("class.php");
$nuevo = new insertarC();
$nuevo -> enviar($_POST["nom"],$_POST["dir"],$_POST["tel"],$_POST["nac"],$_POST["age"],$_POST["email"]);
?>
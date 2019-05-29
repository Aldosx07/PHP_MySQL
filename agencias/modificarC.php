<?php
include("class.php");
$nuevo = new actualizarC();
$nuevo -> update($_POST["cod"],$_POST["nom"],$_POST["dir"],$_POST["tel"],$_POST["nac"],$_POST["age"],$_POST["email"]);
?>
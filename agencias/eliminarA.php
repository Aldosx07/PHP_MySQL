<?php
include("class.php");
$nuevo = new eliminarA();
$nuevo -> delete($_POST["cod"]);
?>
<?php
include("class.php");
$nuevo = new eliminarC();
$nuevo -> delete($_POST["cod"]);
?>
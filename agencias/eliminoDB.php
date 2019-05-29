<? php
	$servidor="localhost";
	$nombreusuario ="root";
	$password="";
	$db="Agencia";
	
	$conexion = new mysqli($servidor,$nombreusuario,$password);
	$sql = "DROP DATABASE agencia";
	if ($conexion -> query($sql)===true) {
		echo "<script type= 'text/javascript'>
		alert('Base de datos eliminada correctamente');
		window.location='index.php'</script>";
	}else{
		die("Error en la eliminacion de la DB: ".$conexion -> error);
	}
?>
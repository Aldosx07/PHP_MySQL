<? php
	$servidor="localhost";
	$nombreusuario ="root";
	$password="";
	$db="DB_PHP_MySQL";
	
	$conexion = new mysqli($servidor,$nombreusuario,$password);
	$sql = "DROP DATABASE DB_PHP_MySQL";
	if ($conexion -> query($sql)===true) {
		echo "<script type= 'text/javascript'>
		alert('Base de datos eliminada correctamente');
		window.location='index.php'</script>";
	}else{
		die("Error en la eliminacion de la DB: ".$conexion -> error);
	}
?>
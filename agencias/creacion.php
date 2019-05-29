<?php

	$servidor="localhost";
	$nombreusuario ="root";
	$password="";
	$db="Agencia";

	$conexion = new mysqli($servidor,$nombreusuario,$password);

	if ($conexion->connect_error) {
		die("Conexion fallida: ".$conexion->connect_error);
	}

	$sql = "CREATE DATABASE Proyecto_BDD_PHP";
	if ($conexion -> query($sql) === true) {		
	}
	else{
		die("Error al crear la base de datos: ".$conexion->error);
	}

	$conexion = new mysqli($servidor,$nombreusuario,$password,$db);

	$sql = "CREATE TABLE Clientes(
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		direccion VARCHAR(100) NOT NULL,
		telefono VARCHAR(9) NOT NULL,
		fecha_nac DATE NOT NULL,
		edad INT(3) UNSIGNED NOT NULL,
		email VARCHAR(100) NOT NULL
	)
	";

	if ($conexion -> query($sql)===true) {
		
	}else
		{die("Error en la creacion de la tabla: ".$conexion -> error);}

	$sql = "CREATE TABLE Anuncios(
		codigo INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		titulo VARCHAR(50) NOT NULL,
		contenido VARCHAR(50) NOT NULL,
		precio INT UNSIGNED NOT NULL,
		codigoC INT,
		FOREIGN KEY (codigoC) REFERENCES Clientes(codigo)
	)
	";

	if ($conexion -> query($sql)===true) {
		echo "<script type= 'text/javascript'>
		alert('Base de datos y tablas creadas correctamente');
		window.location='index.php'</script>";
	}else{
		die("Error en la creacion de la tabla: ".$conexion -> error);
	}

?>

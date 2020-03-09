<?php
session_start();


class insertarC{	

	public function enviar($nom,$dir,$tel,$nac,$age,$email){
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "INSERT INTO Clientes VALUES(null,'$nom','$dir','$tel','$nac','$age','$email');";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido exitoso');
		window.location='index.php'</script>";
	}
	else{
		die("Error al hacer el registro: ".$conexion->error);
	}
		
	}
}

class insertarA{	

	public function enviar($nom,$tit,$cont,$price,$codC){
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "INSERT INTO Anuncios VALUES(null,'$nom','$tit','$cont','$price','$codC');";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido exitoso');
		window.location='index.php'</script>";
	}
	else{
		die("Error al hacer el registro: ".$conexion->error);
	}
		
	}
}


class actualizarC{
	public function update($cod,$nom,$dir,$tel,$nac,$age,$email){
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "UPDATE Clientes SET nombre = '$nom',direccion='$dir',telefono='$tel', fecha_nac='$nac', edad='$age',email='$email' WHERE codigo='$cod'";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido modificado exitosamente');
		window.location='index.php'</script>";
	}
	else{
		die("Error al modificar el registro: ".$conexion->error);
	}
	}
}

class actualizarA{
	public function update($codA,$nom,$tit,$cont,$price,$codC){
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "UPDATE Anuncios SET nombre = '$nom',titulo='$tit',contenido='$cont', precio='$price', codigoC='$codC' WHERE codigo='$codA'";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido modificado exitosamente');
		window.location='index.php'</script>";
	}
	else{
		die("Error al modificar el registro: ".$conexion->error);
	}
	}
}

/**
 * 
 */
class eliminarC
{
	
	public function delete($codC)
	{
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "DELETE FROM Clientes WHERE codigo='$codC'";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido eliminado exitosamente');
		window.location='index.php'</script>";
	}
	else{
		die("Error al eliminar el registro: ".$conexion->error);
	}
	}
}

class eliminarA
{
	
	public function delete($codA)
	{
		$servidor="localhost";
		$nombreusuario ="root";
		$password="";
		$db="DB_PHP_MySQL";

		$conexion = new mysqli($servidor,$nombreusuario,$password,$db);
		$sql = "DELETE FROM Anuncios WHERE codigo='$codA'";
		if ($conexion -> query($sql) === true) {
		echo "<script type= 'text/javascript'>
		alert('El registro ha sido eliminado exitosamente');
		window.location='index.php'</script>";
	}
	else{
		die("Error al eliminar el registro: ".$conexion->error);
	}
	}
}

?>


<?php 

	$conexion=mysqli_connect('localhost','root','','DB_PHP_MySQL');

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mostrar Datos</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<section class="formularios">
<br>

	<table class="tabla" >
		<tr>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Direccion</td>
			<td>Telefono</td>
			<td>Fecha Nacimiento</td>
			<td>Edad</td>
			<td>Email</td>	
		</tr>

		<?php 
		$sql="SELECT * FROM Clientes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['codigo'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['direccion'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
			<td><?php echo $mostrar['fecha_nac'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

	<form method="POST" action="mostrar.php" class="formularios">
	<button type="submit" class="boton">Volver</button>
	</form>

</section>
</body>
</html>
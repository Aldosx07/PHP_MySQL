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
			<td>Titulo</td>
			<td>Contenido</td>
			<td>Precio</td>
			<td>Codigo Cliente</td>
		</tr>

		<?php 
		$sql="SELECT * FROM Anuncios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['codigo'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['titulo'] ?></td>
			<td><?php echo $mostrar['contenido'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['codigoC'] ?></td>
			
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
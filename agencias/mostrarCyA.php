<?php 

	$conexion=mysqli_connect('localhost','root','','Agencia');

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
			<td>CodigoCliente</td>
			<td>NombreCliente</td>			
			<td>CodigoAnuncio</td>
			<td>NombreAnuncio</td>			
			<td>Precio</td>
		</tr>

		<?php 
		$sql="SELECT anuncios.codigoC, clientes.nombre AS nombreC, anuncios.codigo,anuncios.nombre AS nombreA,anuncios.precio FROM clientes INNER JOIN anuncios ON clientes.codigo=anuncios.codigoC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['codigoC'] ?></td>
			<td><?php echo $mostrar['nombreC'] ?></td>			
			<td><?php echo $mostrar['codigo'] ?></td>
			<td><?php echo $mostrar['nombreA'] ?></td>			
			<td><?php echo $mostrar['precio'] ?></td>
			
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
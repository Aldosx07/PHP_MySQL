<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eliminar Clientes</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section class="formularios">
	<h1>Clientes</h1>

	<form action="eliminarC.php" method="POST" class="formularios">
		<table class="tabla">
	<tr>		
		<th>CodigoCliente</th>
	</tr>
	<tr>		
		<td><input type="text" name="cod"></td>
	</tr>
	</table>
	<button type="submit" class="boton">Eliminar</button>
	</form>

	<form method="POST" action="index.php" class="formularios">
	<button type="submit" class="boton">Volver</button>
	</form>

	</section>
</body>
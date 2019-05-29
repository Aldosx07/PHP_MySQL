<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Modificar Clientes</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section class="formularios">
	<h1>Clientes</h1>

	<form action="modificarC.php" method="POST" class="formularios">
		<table class="tabla">
	<tr>
		<th>Codigo</th>		
		<th>Nombre</th>
		<th>Direccion</th>
		<th>Telefono</th>
		<th>Fecha Nacimiento</th>
		<th>Edad</th>
		<th>Email</th>
	</tr>
	<tr>
		<td><input type="text" name="cod"></td>		
		<td><input type="text" name="nom"></td>
		<td><input type="text" name="dir"></td>
		<td><input type="text" name="tel"></td>
		<td><input type="text" name="nac"></td>
		<td><input type="text" name="age"></td>
		<td><input type="text" name="email"></td>
	</tr>
	</table>
	<button type="submit" class="boton">Modificar</button>
	</form>

	<form method="POST" action="index.php" class="formularios">
	<button type="submit" class="boton">Volver</button>
	</form>

	</section>
</body>
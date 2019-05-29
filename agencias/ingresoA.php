<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Insertar Anuncios</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<section class="formularios">
	<h1>Anuncios</h1>

	<form action="ingresarA.php" method="POST" class="formularios">
		<table class="tabla">
	<tr>		
		<th>Nombre</th>
		<th>Titulo</th>
		<th>Contenido</th>
		<th>Precio</th>
		<th>Codigo de Cliente</th>
	</tr>
	<tr>				
		<td><input type="text" name="nom"></td>
		<td><input type="text" name="tit"></td>
		<td><input type="text" name="cont"></td>
		<td><input type="text" name="price"></td>
		<td><input type="text" name="codC"></td>
	</tr>
	</table>
	<button type="submit" class="boton">Agregar</button>
	</form>

	<form method="POST" action="index.php" class="formularios">
	<button type="submit" class="boton">Volver</button>
	</form>

	</section>
</body>
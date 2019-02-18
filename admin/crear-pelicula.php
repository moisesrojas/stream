<?php $titulo = "Insertar Película";
include_once("includes/conexion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h1><?php echo $titulo;?></h1>
	<?php include_once("includes/menu.php"); ?>
	
	
	<form action="includes/insertar-pelicula.php" method="POST">
		<span>Título:</span>
		<input type="text" name="titulo" placeholder="Título">
		<br><br>
		<span>Sinopsis</span>
		<textarea name="sinopsis" placeholder="Sinopsis"></textarea>
		<br><br>
		<span>Fecha de lanzamiento:</span>
		<input type="text" name="lanzamiento" placeholder="Fecha de lanzamiento">
		<br><br>
		<span>Director:</span>
		<input type="text" name="director" placeholder="Director">
		<br><br>
		<span>Poster:</span>
		<input type="text" name="poster" placeholder="Poster">
		<br><br>
		<input type="submit" name="submit" value="Insertar Registo">
	</form>
</body>
</html>
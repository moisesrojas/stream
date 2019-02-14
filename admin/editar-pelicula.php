<?php 
$titulo_pagina = "Editar Película";
include_once("includes/conexion.php");
$id = $_GET['id'];
$consulta_pelicula = "SELECT * FROM peliculas WHERE id = $id";
$query_editar = mysqli_query($conexion,$consulta_pelicula);
while ($resultado = mysqli_fetch_assoc($query_editar)){
	$titulo = $resultado['titulo'];
	$sinopsis = $resultado['sinopsis'];
	$lanzamiento = $resultado['lanzamiento'];
	$director = $resultado['director'];
	$poster = $resultado['poster'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo_pagina;?></title>
</head>
<body>
	<h1><?php echo $titulo_pagina;?></h1>
	
	<form action="includes/actualizar-pelicula.php" method="POST">
		<span>Título:</span>
		<input type="text" name="titulo" placeholder="Título" value="<?php echo $titulo; ?>">
		<br><br>
		<span>Sinopsis</span>
		<textarea name="sinopsis" placeholder="Sinopsis">
			<?php echo $titulo; ?>
		</textarea>
		<br><br>
		<span>Fecha de lanzamiento:</span>
		<input type="text" name="lanzamiento" placeholder="Fecha de lanzamiento" value="<?php echo $lanzamiento; ?>">
		<br><br>
		<span>Director:</span>
		<input type="text" name="director" placeholder="Director" value="<?php echo $director; ?>">
		<br><br>
		<span>Poster:</span>
		<input type="text" name="poster" placeholder="Poster" value="<?php echo $poster; ?>">
		<br><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="submit" value="Editar Registo">
	</form>
</body>
</html>
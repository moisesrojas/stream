<?php
$titulo = "¡Hola!";

/*Aquí va un comentario */
//Aquí va otro comentario

$x = 5;
$y = 3;
$z = $x - $y;

$nombre = "Moisés";
$apellido = "Rojas";
$nombreCompleto = $nombre . ' ' . $apellido . ' ' . "Alcalá";

//INCLUIMOS EL ARCHIVO DE CONEXIÓN
include_once("includes/conexion.php");

//EJECUTAR UNA CONSULTA SQL CON LA CONEXIÓN
$consulta = mysqli_query($conexion, "SELECT * FROM movies");


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
	<style type="text/css">
		.titulo { font-weight:bold; font-size:46px;}
		.estiloParrafo {color:blue;}
	</style>
</head>
<body>
	<h1 class="titulo"><?php echo $titulo; ?></h1>
	
	<table class="registros">
		<tbody>
			<tr>
				<td>ID</td>
				<td>TÍTULO</td>
				<td>SINOPSIS</td>
				<td>LANZAMIENTO</td>
				<td>DIRECTOR</td>
				<td>POSTER</td>
			</tr>
			<?php
		//HACEMOS UN CICLO PARA MOSTRAR LA INFORMACIÓN DE LA CONSULTA
		while ($resultado = mysqli_fetch_assoc($consulta)){
			echo "<tr>";
			echo "<td>" . $resultado['id'] . "</td>";
			echo "<td>" . $resultado['titulo'] . "</td>";
			echo "<td>" . $resultado['sinopsis'] . "</td>";
			echo "<td>" . $resultado['lanzamiento'] . "</td>";
			echo "<td>" . $resultado['director'] . "</td>";
echo "<td><img width='150' src='" . $resultado['imagen'] . "'></td>";
			echo "</tr>";
		}
			?>
		</tbody>
	</table>
</body>
</html>
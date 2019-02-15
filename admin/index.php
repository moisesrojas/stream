<?php
$titulo = "Hola Mundo!!";
/*Aquí va un comentario*/

$materia = "Tecnología Web";

$nombre_completo = $nombre . ' ' . $apellido . ' ' . 'Alcalá';

//INCLUIMOS LA CONEXIÓN A BASE DE DATOS
include_once("includes/conexion.php");

//EJECUTA UNA CONSULTA UTILIZANDO LA CONEXIÓN A BASE DE DATOS
$consulta = mysqli_query($conexion, "SELECT * FROM peliculas");

?>
<!DOCTYPE html>
<html> 
<head>
	
<style>
.titulo{
	font-weight:bold;
	font-size:46px;
}

.estiloParrafo{
	color:blue;
}

</style>

<title> <?php echo $titulo; ?> </title>
</head>
<body> 
<h1 class="titulo"> <?php echo $titulo; ?></h1>
<p class="estiloParrafo">Mi nombre es <?php echo $nombre_completo;?> y estoy en clase <?php echo $materia; ?></p>


<table class="registros">
	<tbody>
		<tr>
			<td>ID</td>
			<td>Título</td>
			<td>Sinopsis</td>
			<td>Lanzamiento</td>
			<td>Director</td>
			<td>Imagen</td>
			<td>Eliminar</td>
		</tr>

<?php
//HACEMOS UN CICLO PARA MOSTRAR LA INFORMACIÓN DE LA CONSULTA
while ($resultado = mysqli_fetch_assoc($consulta)) {
	echo "<tr>";
	echo "<td>" . $resultado['id'] . "</td>";
	echo "<td><a href='editar-pelicula.php?id=" . $resultado['id'] . "'>" . $resultado['titulo'] . "</a></td>";
	echo "<td>" . $resultado['sinopsis'] . "</td>";
	echo "<td>" . $resultado['lanzamiento'] . "</td>";
	echo "<td>" . $resultado['director'] . "</td>";
	echo "<td><img width='150' src='" . $resultado['imagen'] . "'></td>";
	echo "<td><a href='includes/eliminar-pelicula.php?id=" . $resultado['id'] . "'>Eliminar</a></td>";
	echo "</tr>";
}
?>
</tbody>
</table>

</body>
</html>
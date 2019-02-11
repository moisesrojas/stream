<?php
ob_start();
include_once("conexion.php");
$titulo = $_POST['titulo'];
$sinopis = $_POST['sinopsis'];
$lanzamiento = $_POST['lanzamiento'];
$director = $_POST['director'];
$poster = $_POST['poster'];

$consulta = "INSERT INTO peliculas (titulo, sinopsis, lanzamiento, director, poster) VALUES ('$titulo','$sinopis',$lanzamiento,'$director','$poster')";

mysqli_query($conexion,$consulta);
header('Location:../crear-pelicula.php')
ob_flush();
?>
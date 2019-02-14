<?php
ob_start();
include_once("conexion.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$sinopsis = $_POST['sinopsis'];
$lanzamiento = $_POST['lanzamiento'];
$director = $_POST['director'];
$poster = $_POST['poster'];

$consulta_actualizar = "UPDATE peliculas SET titulo='$titulo', sinopsis='$sinopsis', lanzamiento=$lanzamiento, director='$director', poster='$poster' WHERE id='$id'";

mysqli_query($conexion, $consulta_actualizar);
header('Location:../');
ob_flush();
?>
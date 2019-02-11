<?php
ob_start();
include_once("conexion.php");
$id = $_GET['id'];
$consulta_eliminar = "DELETE FROM peliculas WHERE id='$id'";
mysqli_query($conexion,$consulta_eliminar);
header('Location:../');
ob_flush();
?>
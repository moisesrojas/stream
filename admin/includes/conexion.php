<?php
$servidor = "localhost";
$usuario = "root";
$pass = "root";
$bd = "lanetflix";

$conexion = mysqli_connect($servidor,$usuario,$pass,$bd);

if (!$conexion){ 
	die("No se pudo conectar a la base de datos" . mysqli_connect_error());
} else { 
	echo "Conectado";
}

?>
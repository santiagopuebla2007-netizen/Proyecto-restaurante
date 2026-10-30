<?php

$servidor = "localhost";
$usuario_db = "root";
$contreseña_db = "";
$nombre = "guardiavieja";

$conexion = new mysqli($servidor, $usuario_db, $contreseña_db, $nombre);

if ($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}

?>

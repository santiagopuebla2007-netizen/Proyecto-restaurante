<?php
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    $hora = $_POST['hora'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $personas = $_POST['personas'] ?? '';
    $comentarios = $_POST['comentarios'] ?? '';

    // Son 6 campos = 6 signos ?
    $consulta = $conexion->prepare("INSERT INTO reservas (nombre, fecha, hora, telefono, personas, comentarios) VALUES (?, ?, ?, ?, ?, ?)");
    
    // 6 tipos ("ssssis") y 6 variables
    $consulta->bind_param("ssssis", $nombre, $fecha, $hora, $telefono, $personas, $comentarios);
    $consulta->execute();

    header("Location: reserva-exitosa.html");
    exit;
} else {
    // Si entran directo sin enviar el formulario, los redirige a reservas.html
    header("Location: reservas.php");
    exit;
}
?>

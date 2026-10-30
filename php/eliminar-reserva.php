<?php
session_start();

if (!isset($_SESSION['admin'])){
    header("Location: mis-reservas-login.php");
    exit;
}

require "conexion.php";

$id = $_POST['IDReservas'];

$consulta = $conexion->prepare("DELETE FROM reservas WHERE IDReservas = ?");
$consulta->bind_param("i", $id);
$consulta->execute();

header ("Location: tabla-reservas.php");
exit;
?>

<?php
require 'conexion.php';

$usuario = "britos domingo";
$contraseña = "uch2026";

$contraseña_segura = password_hash($contraseña, PASSWORD_DEFAULT);

$conexion->query("INSERT INTO admin (usuario, contraseña) VALUES ('$usuario', '$contraseña_segura')");

echo "Admin creado";

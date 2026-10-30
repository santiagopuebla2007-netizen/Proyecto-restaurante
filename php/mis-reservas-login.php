<?php
session_start(); // Activa el manejo de sesiones
require 'conexion.php'; // Conexión a la base de datos

$error = "";

// Se ejecuta al enviar el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura lo ingresado en el formulario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consulta en la base de datos por el nombre de usuario
    $resultado = $conexion->query("SELECT * FROM admin WHERE usuario = '$usuario'");
    $admin = $resultado->fetch_assoc();

    // Compara la contraseña ingresada con el hash guardado en la BD
    if ($admin && password_verify($contraseña, $admin['contraseña'])) {
        $_SESSION['admin'] = true;
        header("Location: tabla-reservas.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proyecto.css">
    <title>Acceso Admin</title>
</head>    

<body class="pagina-login">

 <section  id="Mis Reservas" class="login">

<main>
<form method="POST" action="mis-reservas-login.php">
   <img src="imagenes/guardiavieja.jpg" alt="Logo Guardia Vieja" class="login-logo">
<h2>Acceso<br>Administracion</h2>
<p>Ingrese sus credenciales para acceder al panel de administración.</p>

<?php if ($error != "") { echo "<p>$error</p>";} ?>

<input type="text" name="usuario" placeholder="Ingrese nombre de usuario" required>
<input type="text" name="contraseña" placeholder="Ingrese la contraseña" required>
<button type="submit">Acceder</button>


    <div class="volver-inicio">
            <a href="proyecto.html">VOLVER AL INICIO</a>
        </div>

</form>

    <script src="proyecto.js"></script>

</main>
</section>
</body>
</html>

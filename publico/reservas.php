<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="proyecto.css">
    </head>

    <body>
        <header class="header">
            <div class="logo">
                <img src="imagenes/guardiavieja.jpg" alt="Imagen del logo"  width="100px" height="100px">
            </div>

            <nav class="menu">             
                <ul>
            <li><a href="proyecto.php#Inicio">INICIO</a></li>
            <li><a href="proyecto.php#Menu">MENU</a></li>
            <li><a href="proyecto.php#Local">LOCAL</a></a></li>
            <li><a href="proyecto.php#Quienes somos">QUIENES SOMOS</a></li>
            <li><a href="proyecto.php#Contacto">CONTACTO</a></li>
            <li><a href="proyecto.php#Ubicacion">UBICACION</a></li>
            <li><a href="proyecto.php#Mis Reservas">MIS RESERVAS</a></li>
                </ul>
            </nav>
        </header>
  <section  id="Mis Reservas" class="reservas">
            <h2>RESERVA TU MESA</h2>
            <p>Completa tus datos y elegí fecha, hora y cantidad de comensales. Te responderemos con la confirmación de tu reserva.</p>
        
            <main>
                <form method="POST" action="reservas.php">
                    <input type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
                    <input type="date" name="fecha" placeholder="Ingrese la fecha" required>
                    <input type="time" name="hora" placeholder="Ingrese la hora" required>
                    <input type="number" name="telefono" placeholder="Ingrese su numero de telefono" required> 
                    <input type="number" name="cantidad de personas" min="1" max="30" placeholder="Ingrese la cantidad de personas" required> 
                    <button type="submit">Reservar</button>
                </form>
            </main>
        </section>
    </body>
</html>

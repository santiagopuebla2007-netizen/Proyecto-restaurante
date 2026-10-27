<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="proyecto.css">
    </head>

    <body class="pagina-login">
        <header class="header">
            <div class="logo">
                <img src="imagenes/guardiavieja.jpg" alt="Imagen del logo"  width="100px" height="100px">
            </div>

            <nav class="menu">             
                <ul>
            <li><a href="proyecto.html#Inicio">INICIO</a></li>
            <li><a href="proyecto.html#Menu">MENU</a></li>
            <li><a href="proyecto.html#Local">LOCAL</a></a></li>
            <li><a href="proyecto.html#Quienes somos">QUIENES SOMOS</a></li>
            <li><a href="proyecto.html#Contacto">CONTACTO</a></li>
            <li><a href="proyecto.html#Ubicacion">UBICACION</a></li>
            <li><a href="proyecto.html#Mis Reservas">MIS RESERVAS</a></li>
                </ul>
            </nav>
        </header>

            <h2 class="titulo-reserva">RESERVA TU MESA</h2>
            <p class="subtitulo-reserva">Completa tus datos y elegí fecha, hora y cantidad de comensales. Te responderemos con la confirmación de tu reserva.</p>

        <section  id="Mis Reservas" class="login">
        
            <main>
                <form method="POST" action="registro-reservas.php">

                <h2>RESERVA</h2>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre completo" required>
                    <input type="date" name="fecha" placeholder="Ingrese la fecha" required>
                    <input type="time" name="hora" placeholder="Ingrese la hora" required>
                    <input type="number" name="telefono" placeholder="Ingrese su numero de telefono" required> 
                    <input type="number" name="cantidad de personas" min="1" max="30" placeholder="Ingrese la cantidad de personas" required>                    
                    <input type="text" name="comentarios" placeholder="Si desea, agregue una aclaracion" required> 
                    <button type="submit">Reservar</button>
                </form>
            </main>
        </section>
            <script src="proyecto.js"></script>
    </body>
</html>

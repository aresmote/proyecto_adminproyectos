<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>INDEX</title>
</head>
<body>
    <header>
    <div class="nav-bg">
        <nav class="nav-principal">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="logout.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>
    </header>
    

    <i>
	<input checked type="radio" name="s" style="background-image: url('slider1.jpeg');" title="Random Picture 1">
	<input type="radio" name="s" style="background-image: url('/img/slider2.jpeg');" title="Random Picture 2">
	<input type="radio" name="s" style="background-image: url('/img/slider3.jpeg');" title="Random Picture 3">
	
</i>

    <section id="inicio">
        <h2>Bienvenido a la página principal</h2>
        <p>Contenido introductorio aquí...</p>
    </section>

    <section id="servicios">
        <h2>Nuestros Servicios</h2>
        <button>Botón 1</button>
        <button>Botón 2</button>
        <button>Botón 3</button>
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <button>Contacto 1</button>
        <button>Contacto 2</button>
        <button>Contacto 3</button>
    </section>
</body>
</html>

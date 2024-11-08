<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ejemplo</title>
    <style>
        :root { /*Genera variables, en este caso son colores */
            --blanco:#ffffff;
            --oscuro:#212121;
            --primario:#ffc107;
            --secundario:#0097a7;
            --gris:#757575;
            --grisclaro: #DFE9F3;

        }
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: var(--grisclaro);
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: var(--secundario);
        }
        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
            padding: 10px;
        }
        nav img {
            max-width: 100px;
            margin-right: 20px;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #575757;
        }
        main {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .slider {
        position: relative;
        width: 80%;
        overflow: hidden;
        margin-bottom: 20px;
        display: flex; /* Asegura que el slider puede usar flexbox */
        justify-content: center; /* Centra el contenido horizontalmente */
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease;
            width: 100%; /* Asegura que las imágenes ocupen el 100% del ancho del slider */
        }

        .slide {
            min-width: 100%; /* Cada slide ocupa el 100% del contenedor */
            box-sizing: border-box;
            display: flex; /* Usa flexbox para centrar la imagen dentro del slide */
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente si es necesario */
        }

        .slide img {
            max-width: 70%; /* Asegura que la imagen no exceda el contenedor */
            height: auto; /* Mantiene la relación de aspecto */
            display: block; /* Evita espacios en blanco debajo de la imagen */
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            transform: translateY(-50%);
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
        .introduction {
            margin-bottom: 20px;
            text-align: center;
            background-color: var(--oscuro);

            h1{
                text-transform: uppercase; 
                color: var(--primario);
            }
            p{
                color: var(--blanco);
            }


        }
        .blockquotes {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 800px;
            margin: 20px 0;
        }
        blockquote {
            width: 45%;
            padding: 10px;
            border-left: 5px solid #ccc;
            font-style: italic;
            text-align: center;
        }
        .block h1{
            text-transform: uppercase;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f8f8;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @media (max-width: 600px) {
            .blockquotes {
                flex-direction: column;
                align-items: center;
            }
            blockquote {
                width: 90%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    
    <nav>
    <img src="img/logo.jpg" alt="Logo de la Empresa" style="max-width: 200px;">

    <a href="#introduccion">Inicio</a>
    <a href="#seccion1">Recursos</a>
    <a href="#seccion2">Vulnerabilidad</a>
    <a href="#seccion3">Practicas</a>
    <a href="#seccion4">Glosario</a>
    <a href="#seccion5">Tipo de delitos</a>
    <a href="logout.php">Cerrar Sesión</a>
</nav>
</header>



<main>
    <div class="slider">
        <div class="slides">
            
            <div class="slide"><img src="img/slider2.jpeg" alt="Imagen 1"></div>
            <div class="slide"><img src="img/slider3.jpeg" alt="Imagen 2"></div>
            <div class="slide"><img src="img/pinguino.png" alt="Imagen 3"></div>
            
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <section class="introduction" id="introduccion">
        <h1>Introducción</h1>
        <p>En la era digital actual, la ciberseguridad se ha convertido en una prioridad fundamental para individuos, empresas 
        y gobiernos. A medida que la tecnología avanza, también lo hacen las amenazas que enfrentamos en el ciberespacio. El 
        hacking ético emerge como una práctica esencial para proteger nuestros sistemas y datos, al identificar y mitigar
         vulnerabilidades antes de que puedan ser explotadas por actores maliciosos. Este glosario de términos relacionados 
         con el hacking ético y la ciberseguridad tiene como objetivo proporcionar una comprensión clara de los conceptos
          clave que rigen este campo en constante evolución. Desde el malware y la ingeniería social hasta las vulnerabilidades
           de software y los delitos informáticos, cada término es crucial para entender cómo se desarrollan los ataques cibernéticos   
        y cómo podemos defendernos de ellos. A través de este recurso, que ponemos a su disposición los alumnos de la Benemérita 
        Universidad Autónoma de Puebla, esperamos empoderar a los lectores con el conocimiento necesario para navegar de manera 
        segura en el mundo digital y fomentar una cultura de seguridad proactiva.</p>
    </section>

    <div class="blockquotes">
        <blockquote class="block">
            <h1><b>glosario</b></h1>
            <p><b></b></p>
        </blockquote>
        <blockquote class="block">
        <h1><b>Vulnerabilidades</b></h1>
        </blockquote>
    </div>

    <div>
        <h2>Apartado 1</h2>
        <p>Contenido del apartado 1.</p>
    </div>
    <div>
        <h2>Apartado 2</h2>
        <p>Contenido del apartado 2.</p>
    </div>
</main>

<footer>
    <p>Información de contacto: ejemplo@empresa.com | Tel: 123-456-7890</p>
</footer>

<script src="slider.js"></script>
</body>
</html>

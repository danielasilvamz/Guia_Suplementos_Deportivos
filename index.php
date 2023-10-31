<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de Suplementos Deportivos</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon1.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab4a86798a.js" crossorigin="anonymous"></script>
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg seccion-oscura navbar-light py-auto fixed-top ">
        <div class="container"> 
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
                <img src="img/logo_blanco.png" width="100" alt="Logo de la pagina">
            </a>

            <div class="order-lg-2 nav-btns d-flex align-items-center">
                <div class="dropdown">
                    <a class="btn position-relative dropdown-toggle text-white" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="login.php">Inicia sesión</a></li>
                        <li><a class="dropdown-item" href="registro.php">Regístrate</a></li>
                    </ul>
                </div>

                <button type="button" class="btn position-relative mx-2 text-white">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <button type="button" class="btn position-relative mx-2 text-white">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-white" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown px-2 py-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Proteínas</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Aminoácidos</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Creatinas</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Quemadores</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Pre-entrenos</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Multivitamínicos</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2 py-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Marcas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">ProScience</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Nutramerican</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Muscletech</a></li>
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Smart Muscle</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-white" href="#">Comparar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seccion principal - Hero -->
    <section id="header" class="vh-100 carousel slide" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="container h-100 d-flex align-items-center carousel-inner">
            <div class="text-center carousel-item active">
                <h2 class="text-white">¡Bienvenido!</h2>
                <h1 class="py-2 fw-bold ">Guía de Suplementos Deportivos</h1>
                <p class="text-white">Regístrate para disfrutar de todo nuestro contenido.</p>
                <a href="registro.php" class="btn mt-3">Registrarte</a>
            </div>
            <div class="text-center carousel-item">
                <h2 class="text-white">¡Bienvenido!</h2>
                <h1 class="py-2 fw-bold ">Guía de Suplementos Deportivos</h1>
                <p class="text-white">¿Ya tienes cuenta? Inicia sesión aquí</p>
                <a href="login.php" class="btn mt-3">Iniciar sesión</a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>

    <!-- Sección caracteristicas-->
    <section id="caracteristicas" class="caracteristicas">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">Nuestra página</h2>
            </div>

            <div class="row g-3">
                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <div class="card-img position-relative overflow-hidden h-100 d-flex flex-column justify-content-center align-items-center">
                        <img src="img/suplementos2.png" width="400" alt="">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="card-title text-center">Amplio catálogo informativo de suplementos deportivos</h4>
                        <p class="card-text mt-3 text-muted">Encuentra información detallada sobre diferentes tipos de
                            suplementos, sus características y cómo se pueden utilizar de manera efectiva.</p>
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <div class="card-img position-relative overflow-hidden h-100 d-flex flex-column justify-content-center align-items-center">
                        <img src="img/suplementos1.png" class="suplem-img" width="350" alt="">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="card-title text-center">Múltiples categorías y marcas reconocidas en el mercado</h4>
                        <p class="card-text mt-3 text-muted">Encuentra una amplia gama de opciones, desde las marcas más
                            renombradas hasta aquellas más asequibles.</p>
                    </div>
                </div>

                <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
                    <div class="card-img position-relative overflow-hidden h-100 d-flex flex-column justify-content-center align-items-center">
                        <img src="img/comparar.png" width="300" class="" alt="Imagen referente a comparar">
                    </div>
                    <div class="card-body px-0">
                        <h4 class="card-title text-center">Comparador de productos diseñado para simplificar tu búsqueda y
                            toma de decisiones</h4>
                        <p class="card-text mt-3 text-muted">Encuentra las herramientas necesarias para comparar
                            productos en función de tus objetivos, preferencias y
                            necesidades nutricionales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section class="contacto">
        <div class="container">
            <div id="contacto" class="container rectangulo text-center d-flex justify-content-evenly">
                <div class="row">
                    <div class="col-12 col-md-9 col-lg-9 descripcion">
                    Regístrate para disfrutar de estos beneficios y muchos más.<br>
                    Únete a nuestra comunidad de entusiastas del fitness y la nutrición, y descubre un mundo de oportunidades para
                    optimizar tu rendimiento y mejorar tu bienestar
                    </div>
                    <div class="col-12 col-md-3 col-lg-3">
                        <a href="registro.php">
                            <button type="button">
                                Regístrate
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <!-- Sección pie de pagina-->
    <footer>
        <div class="container">
            <div class="useful-links">
                <ul>
                    <img src="img/logo_blanco.png" class="mb-3" width="100" alt="Logo de la pagina">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="https://sanmonor.github.io/Proyecto_Suplementos_Deportivos/" target="_blank"
                    rel="noopener noreferrer">Nuestro Portafolio</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Guía de suplementos deportivos. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta | Guía de Suplementos Deportivos</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon1.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles_registro.css">
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
                            <li><a class="dropdown-item disabled" aria-disabled="true" href="#">Multivitamínicos</a></li>

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

    <section class="formulario seccion-gris">
        <div class="container">
            <div class="row">
                <div class=" col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <form  action="" method="POST" id="formulario" autocomplete="off">
                        <h2>¡Comencemos!</h2>
                        <p>Regístrate para difrutar de todo nuestro contenido</p><br>
                        <?php
                        include "modelo/conexion_bd.php";
                        include "controlador/controlador_registrar.php";
                        ?>

                        <div class="form-group">
                            <label class="label" for="nombres"><strong>Nombres:</strong></label>
                            <input type="text" class="form-control" id="nombres" name="nombres"
                                placeholder="Ingresa tus nombres" required>
                        </div>
                        <div class="form-group">
                            <label class="label" for="apellidos"><strong>Apellidos:</strong></label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                placeholder="Ingresa tus apellidos" required>
                        </div>

                        <div class="form-group">
                            <label class="label" for="telefono"><strong>Teléfono:</strong></label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                placeholder="Ingresa un teléfono" pattern="[0-9]{10}" required>
                        </div>

                        <div class="form-group">
                            <label class="label" for="correo"><strong>Correo:</strong></label>
                            <input type="email" class="form-control" id="correo" name="correo"
                                placeholder="Ingresa un correo" required>
                        </div>

                        <div class="form-group">
                            <label class="label" for="contrasena"><strong>Contraseña:</strong></label>
                            <input type="password" class="form-control" id="contrasena" name="confirmar_contrasena"
                                placeholder="Confirma la contraseña" required minlength="8">
                        </div>

                        <div class="form-group">
                            <label class="label" for="confirmar_contrasena"><strong>Confirmar contraseña:</strong></label>
                            <input type="password" class="form-control" id="confirmar_contrasena" name="contrasena"
                                placeholder="Ingresa una contraseña" required minlength="8">
                        </div>

                        <div class="form-group form_action--button">
                            <input class="btn btn-primary" type="submit" value="Registrar" id="btn_registrar"
                                name="btn_registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección pie de pagina-->
    <footer>
        </div>
        <div class="useful-links">
            <ul>
                <img src="img/logo_blanco.png" class="mb-3" width="100" alt="Logo de la pagina">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="https://sanmonor.github.io/Proyecto_Suplementos_Deportivos/" target="_blank" rel="noopener noreferrer">Nuestro Portafolio</a></li>
                <li><a href="#">Términos y condiciones</a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Guía de suplementos deportivos. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
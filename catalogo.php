<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Guía de Suplementos Deportivos</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon1.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles_catalogo.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab4a86798a.js" crossorigin="anonymous"></script>
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include "modelo/conexion_bd.php";
    include "controlador/controlador_cerrar.php";
    include 'controlador/controlador_catalogo.php';
    ?>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg seccion-oscura navbar-light py-auto fixed-top ">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index_log.php">
                <img src="img/logo_blanco.png" width="100" alt="Logo de la pagina">
            </a>

            <div class="order-lg-2 nav-btns d-flex align-items-center">
                <div class="dropdown">
                    <a class="btn position-relative dropdown-toggle text-white" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="perfil.php">Mi cuenta</a></li>
                        <form action="" method="POST" id="formulario" autocomplete="off">
                            <input class="dropdown-item" type="submit" value="Cerrar sesión" id="btn_cerrar"
                                name="btn_cerrar">
                        </form>
                    </ul>
                </div>

                <button type="button" class="btn position-relative mx-2 text-white">
                    <i class="fa-regular fa-heart"></i>
                </button>

                <form id="search-form" class="d-flex" role="search" action="resultados_busqueda.php" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control me-2" id="recuadro_buscar" name="palabraClave" placeholder="Buscar"
                            aria-label="Search">
                    </div>
                    <button type="button" id="btn_buscar" class="btn text-white"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <script>
                    // Evento click al botón buscar
                    document.getElementById("btn_buscar").addEventListener("click", function () {
                        // Obtener el valor del input de búsqueda
                        var palabraClave = document.getElementById("recuadro_buscar").value;

                        if (palabraClave) {
                            // Redirigir a catalogo.php con la palabra clave como parámetro en la URL
                            window.location.href = 'resultados_busqueda.php?palabraClave=' + encodeURIComponent(palabraClave);
                        }
                    });
                </script>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-white" href="index_log.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown px-2 py-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu">
                        <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Proteínas' ?>'">Proteínas</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Aminoácidos' ?>'">Aminoácidos</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Creatinas' ?>'">Creatinas</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Quemadores' ?>'">Quemadores</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Pre-entrenos' ?>'">Pre-entrenos</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Multivitamínicos' ?>'">Multivitamínicos</button>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2 py-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Marcas
                        </a>
                        <ul class="dropdown-menu">
                        <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'ProScience' ?>'">ProScience</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Nutramerican' ?>'">Nutramerican</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Muscletech' ?>'">Muscletech</button>
                            <button type="button" id="btn_proteinas" class="dropdown-item"
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Smart Muscle' ?>'">Smart Muscle</button>
                        </ul>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-white" href="#">Comparar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Catalogo -->
    <section class="catalogo" style="padding-top: 104px; padding-bottom: 50px;">
        <div class="container">
                <div class="title text-center py-4">
                    <h2 class="position-relative d-inline-block">
                        <?php
                        echo $palabraClave;
                        ?>
                    </h2>
                </div>
                <div class="row g-0">
                    <?php
                    while ($datos = $sql->fetch_object()) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                            <div class="card h-100 d-flex">
                                <div
                                    class="card-img position-relative overflow-hidden h-100 d-flex flex-column justify-content-center align-items-center">
                                    <img src="<?= $datos->foto ?>" alt="Imagen del suplemento">
                                </div>
                                <div class="card-body h-30 border align-items-end">
                                    <h3>
                                        <?= $datos->nombre ?>
                                    </h3>
                                    <h5>
                                        <?= $datos->nombre_categoria ?><span><i class="fas fa-heart"></i></span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    <?php }
            ?>
            </div>
        </div>
    </section>

    <!-- Sección pie de pagina-->
    <footer>
        </div>
        <div class="useful-links">
            <ul>
                <img src="img/logo_blanco.png" class="mb-3" width="100" alt="Logo de la pagina">
                <li><a href="index_log.php">Inicio</a></li>
                <li><a href="https://sanmonor.github.io/Proyecto_Suplementos_Deportivos/" target="_blank"
                        rel="noopener noreferrer">Nuestro Portafolio</a></li>
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
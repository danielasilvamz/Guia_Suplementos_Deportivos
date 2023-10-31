<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta | Guía de Suplementos Deportivos</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon1.ico">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles_perfil.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab4a86798a.js" crossorigin="anonymous"></script>
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <script>
        function eliminar() {
            var respuesta = confirm("Estás seguro que deseas borrar tu cuenta?");
            return respuesta;
        }
    </script>
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
                                onclick="window.location.href = 'catalogo.php?palabraClave=<?= 'Smart Muscle' ?>'">Smart
                                Muscle</button>
                        </ul>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-white" href="#">Comparar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="cuenta seccion-blanca">
        <div class="container light-style flex-grow-1 container-p-y">
            <h2 class="font-weight-bold mb-3">
                Mi cuenta
            </h2>
            <?php
            include "modelo/conexion_bd.php";
            include "controlador/controlador_borrar.php";
            include "controlador/controlador_cerrar.php";
            include "controlador/controlador_contraseña.php";
            ?>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <div class="user card-body media align-items-center text">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-general">Mi Perfil</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Cambiar contraseña</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-notifications">Configuración avanzada</a>
                            <form action="" method="POST" id="formulario" autocomplete="off">
                                <input class="list-group-item list-group-item-action" type="submit"
                                    value="Cerrar sesión" id="btn_cerrar" name="btn_cerrar">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <?php
                            $usuario = $_SESSION['usuario'];
                            $usuario = "'" . $conexion->real_escape_string($usuario) . "'";
                            $sql = $conexion->query("select * from Usuarios where email = $usuario");
                            while ($datos = $sql->fetch_object()) { ?>
                                <div class="tab-pane fade active show" id="account-general">
                                    <hr class="border-light m-0">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Nombres</label>
                                            <input readonly type="text" class="form-control mb-1"
                                                value="<?= $datos->nombres ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Apellidos</label>
                                            <input readonly type="text" class="form-control"
                                                value="<?= $datos->apellidos ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Teléfono</label>
                                            <input readonly type="text" class="form-control"
                                                value="<?= $datos->telefono ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Correo</label>
                                            <input readonly type="text" class="form-control mb-1"
                                                value="<?= $datos->email ?>">
                                            <div class="alert alert-warning mt-3">
                                                Tu correo electrónico no está confirmado. Por favor, comprueba tu bandeja de
                                                entrada.<br>
                                                <a href="javascript:void(0)">Reenviar confirmación</a>
                                            </div>
                                        </div>
                                        <div class="btn">
                                            <button type="button" id="btn_actualizar" class="btn-actualizar text-white"
                                                onclick="window.location.href = 'actualizar_perfil.php'">Actualizar</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="account-change-password">
                                    <div class="card-body pb-2">
                                        <form action="" method="POST" id="formulario" autocomplete="off">
                                            <div class="form-group">
                                                <label class="form-label">Contraseña actual</label>
                                                <input type="password" id="contrasena_actual" name="contrasena_actual"
                                                    class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nueva contraseña</label>
                                                <input type="password" id="nueva_contrasena" name="nueva_contrasena"
                                                    class="form-control" required minlength="8">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Confirmar nueva contraseña</label>
                                                <input type="password" id="confirmar_contrasena" name="confirmar_contrasena"
                                                    class="form-control" required minlength="8">
                                            </div>
                                            <div class="btn">
                                                <form action="" method="POST" id="formulario" autocomplete="off">
                                                    <input class="btn-actualizar text-white" type="submit" value="Guardar"
                                                        id="btn_guardar_contraseña" name="btn_guardar_contraseña">
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="account-notifications">
                                    <div class="card-body pb-3">
                                        <h6 class="mb-3">Notificaciones</h6>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Permitir notificaciones por correo</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="switcher">
                                                <input type="checkbox" class="switcher-input" checked>
                                                <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                    <span class="switcher-no"></span>
                                                </span>
                                                <span class="switcher-label">Permitir notificaciones por mensaje</span>
                                            </label>
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                    <div class="card-body pt-2">
                                        <h6 class="">Eliminar cuenta</h6>
                                        <div class="form-group">
                                            <p>Lamentamos que quieras eliminar tu cuenta.</p>
                                            <div class="btn">
                                                <form action="" method="POST" id="formulario" autocomplete="off"
                                                    onsubmit="return eliminar();">
                                                    <input
                                                        class="btn-borrar text-white list-group-item list-group-item-action"
                                                        type="submit" value="Eliminar cuenta" id="btn_ingresar"
                                                        name="btn_borrar">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
                            ?>
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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
</body >

</html >
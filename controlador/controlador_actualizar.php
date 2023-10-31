<?php
if (!empty($_POST["btn_guardar"])) {
    $usuario = $_SESSION['usuario'];
    $usuario = "'" . $conexion->real_escape_string($usuario) . "'";
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];

    $sql = $conexion->query("update Usuarios set nombres='$nombres', apellidos='$apellidos',
        telefono='$telefono' where email = $usuario");
    if ($sql == 1) {
        echo '<script>alert("¡Datos modificados!");</script>';
        echo '<script>window.location.href = "perfil.php";</script>';
    } else {
        echo '<script>alert("Error al actualizar el perfil");</script>';
    }
}
?>
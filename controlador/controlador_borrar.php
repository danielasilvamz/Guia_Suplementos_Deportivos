<?php
if (!empty($_POST["btn_borrar"])) {
    $usuario = $_SESSION['usuario'];
    $usuario = "'" . $conexion->real_escape_string($usuario) . "'";
    $sql_fav = $conexion->query("delete from Favoritos where 
        usuario_id = (select id from Usuarios where email = $usuario)");
    if ($sql_fav == 1){
        $sql = $conexion->query("delete from Usuarios where email = $usuario");
        if ($sql == 1) {
            session_unset();
            session_destroy();
            echo '<script>alert("Su cuenta fue eliminada correctamente");</script>';
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Error al eliminar su cuenta");</script>';
        }
    } else {
        echo '<script>alert("Error en el proceso de eliminar su cuenta");</script>';
    }
}
?>
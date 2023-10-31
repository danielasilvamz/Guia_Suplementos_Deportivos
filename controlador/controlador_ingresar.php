<?php
if (!empty($_POST["btn_ingresar"])) {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    if (empty($correo) || empty($contrasena)) {
        echo '<div class="alert alert-danger">Los campos están vacíos</div>';
    } else {
        $consulta = "select contrasena from Usuarios where email = '$correo'";
        
        $sql = $conexion->query($consulta);

        if ($sql && $sql->num_rows > 0) {
            $hashed_password = $sql->fetch_assoc()["contrasena"];

            if (password_verify($contrasena, $hashed_password)) {
                $_SESSION['usuario'] = $correo;
                echo '<script>window.location.href = "index_log.php";</script>';
            } else {
                echo '<div class="alert alert-danger">Acceso denegado. Correo o contraseña incorrectos</div>';   
            }
        } else {
            echo '<div class="alert alert-danger">Usuario no encontrado</div>';
        }
    }
}

?>


<?php
if (!empty($_POST["btn_guardar_contraseña"])) {
    $usuario = $_SESSION['usuario'];
    $usuario = "'" . $conexion->real_escape_string($usuario) . "'";

    $contrasena_actual = $_POST["contrasena_actual"];
    $nueva_contrasena = $_POST["nueva_contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    $verificar_actual = $conexion->query("select contrasena from Usuarios where email = $usuario");

    $hashed_password = $verificar_actual->fetch_object()->contrasena;

    if (password_verify($contrasena_actual, $hashed_password)) { 
        if ($nueva_contrasena === $confirmar_contrasena) {  
            //Hashea la nueva contraseña
            $hashed_new_password = password_hash($nueva_contrasena, PASSWORD_BCRYPT);

            $sql = $conexion->query("update Usuarios set contrasena='$hashed_new_password' where email = $usuario");
    
            if ($sql == 1) {
                echo '<script>alert("¡Contraseña actualizada!");</script>';
                echo '<script>window.location.href = "perfil.php";</script>';
            } else {
                echo '<script>alert("Error al actualizar la contraseña");</script>';
            }
        } else {
            echo '<div class="alert alert-danger">Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</div>'; 
        }
    } else {
        echo '<div class="alert alert-danger">La contraseña actual no es correcta. Por favor, inténtalo de nuevo.</div>';
    }
    
}
?>

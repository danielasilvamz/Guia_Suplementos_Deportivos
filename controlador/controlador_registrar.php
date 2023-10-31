<?php
if (!empty($_POST["btn_registrar"])) {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    if ($contrasena === $confirmar_contrasena) {
        $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT);

        $consulta = "call registrarUsuario('$nombres', '$apellidos', '$telefono', '$correo', '$hashed_password')";
        $sql = $conexion->query($consulta);

        if ($sql == 1) {
            $consulta = "select * from usuarios";
            $sql = $conexion->query($consulta);
            $archivo_csv = "./reportes/reporte_usuarios.csv";
            $fp = fopen($archivo_csv, "w");
            while ($fila = $sql->fetch_assoc()) {
                fputcsv($fp, $fila);
            }
            fclose($fp);

            $_SESSION['usuario'] = $correo;
            echo '<script>alert("Usuario registrado correctamente");</script>';
            echo '<script>window.location.href = "index_log.php";</script>';
        } else {
            echo '<script>alert("Error al registrar");</script>';
        }
    } else {
        echo '<div class="alert alert-danger">Las contraseñas no coinciden. Por favor, inténtalo de nuevo.</div>';
    }
}
?>
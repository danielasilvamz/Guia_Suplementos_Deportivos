<?php
if (!empty($_POST["btn_cerrar"])) {
    session_unset();
    session_destroy();
    echo '<script>alert("Sesión cerrada satisfactoriamente");</script>';

    echo '<script>window.location.href = "index.php";</script>';
}
?>
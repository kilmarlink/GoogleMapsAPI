<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: index.php");
    # Y salimos del script
    exit();
}

# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta
//echo "Soy un mensaje secreto";
?>


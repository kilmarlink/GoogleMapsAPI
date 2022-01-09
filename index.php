<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
if (empty($_SESSION["usuario"])) {
    # imprimimos el formulario de inicio de sesión
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Prueba programación - Logixsoft</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Prueba programación - Logixsoft" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-light">
            <h1>Prueba programación Logixsoft</h1>
            <p class="lead">Desarrollo de aplicación de mapas web. La página a desarrollar consta de 4 vistas. 1) Login, 2) Mapa con clientes, 3) Tabla con nombres y ubicaciones de clientes, 4) Mapa de calor</p>
        </div>
        <div class="col-lg-4 offset-lg-2">
            <div class="box-rounded padding40" data-bgcolor="#ffffff">
                <h3 class="mb10">Iniciar Sesion</h3>
                <p>Inicie sesión con una cuenta existente.</p>
                <form class="form-border" method="post" action='login.php'>

                    <div class="field-set">
                        <input type='text' name='usuario' id='email' class="form-control" placeholder="Nombre de usuario">
                    </div>
                    
                    <div class="field-set">
                        <input type='password' name='palabra_secreta' id='password' class="form-control" placeholder="Contraseña">
                    </div>
                    
                    <div class="field-set">
                        <input class="btn btn-color btn-lg btn-block" type="submit" value="Entrar">
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="spacer-single"></div>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php
    # Y salimos del script
    exit();
}
# Si existe un usuario que imprima el mapadeclientes
header("Location: dash.php");
?>

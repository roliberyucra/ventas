<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/views/plantilla/css/style.css">
    <link rel="icon" href="./views/plantilla/img/loguito.png" type="image/x-icon">
    <title>Login</title>
</head>
<body style="background-image: url('./views/plantilla/img/audi.jpg');">
<div id="contenido_login">
        <div class="caja1">
            <p><b>Iniciar sesión</b></p>
        </div>
        <div class="caja2"></div>
        <br>
        <div class="caja3">
            <div class="caja_loguito">
                <img src="./views/plantilla/img/logo.png" width="100%" alt="logo">
            </div>
        </div>
        <div class="caja4">
            <p><b>Bienvenido</b></p>
        </div>
        <br>
        <div class="caja5">
            <p>Inicia con:</p>
        </div>
        <br>
        <div class="caja6">
            <div class="caja_icono">
                <img src="./views/plantilla/img/facebook.png" width="100%" alt="logo">
            </div>
            <div class="caja_icono">
                <img src="./views/plantilla/img/google.png" width="100%" alt="logo">
            </div>
            <div class="caja_icono">
                <img src="./views/plantilla/img/twitter.png" width="100%" alt="logo">
            </div>
        </div>
        <br>
        <div class="caja7">
            <div class="caja71"></div>
            <div class="caja72">ó</div>
            <div class="caja71"></div>
        </div>
        <div class="caja8">
            <form>
                <label>
                    <input class="caja_user" type="text" name="usuario" placeholder="Correo*">
                    <br>
                    <br>
                    <input class="caja_user" type="text" name="password" placeholder="Contraseña*">
                </label>
            </form>
        </div>
        <div class="caja9">
            <a href="">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="caja10">
            <button class="create"><a href="<?php echo BASE_URL ?>/producto" style="text-decoration: none; color: black;">INICIAR SESIÓN</a></button>
        </div>
        <br>
        <div class="caja11">¿Eres nuevo aquí?</div>
        <div class="caja12">
            <button class="create">Crear cuenta</button>
        </div>
        <br>
    </div>
    </body>
</html>
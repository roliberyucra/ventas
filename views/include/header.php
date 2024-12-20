<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/views/plantilla/css/style.css">
    <link rel="icon" href="<?php echo BASE_URL; ?>/views/plantilla/img/logo.png" type="image/x-icon">
    <script src="<?php echo BASE_URL; ?>/views/js/function_producto.js"></script>
    <script src="<?php echo BASE_URL; ?>/views/js/function_categoria.js"></script>
    <script src="<?php echo BASE_URL; ?>/views/js/function_persona.js"></script>
    <script src="<?php echo BASE_URL; ?>/views/js/function_compra.js"></script>
    <script>
        const base_url = '<?php echo BASE_URL; ?>';
    </script>
</head>
<body class="p-0 m-0 border-0 bd-example m-0 border-0">

    <div class="body">
        <div id="menu">
            <div class="bloque_menu">
                <div class="bloque1">
                    <a href="<?php echo BASE_URL; ?>/producto"><img src="./views/plantilla/img/loguito.png" alt="localizacion" width="60px"></a>
                </div>
                <div class="bloque1">
                    <a href="<?php echo BASE_URL; ?>/producto"><img src="./views/plantilla/img/letralogo.png" alt="localizacion" width="140px"></a>
                </div>
            </div>
            <div class="bloque_menu">
                <div class="bloque_sesion">
                    <div class="dropdown-center" style="background-color: black;">
                        <button id="buton_menu" class="btn btn-secondary dropdown-toggle" style="background-color: black; border-color: black;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit; background-color: black;"><font style="vertical-align: inherit; background-color: black;">
                            Categorias
                        </font></font></button>
                        <ul class="dropdown-menu" style="background-color: black; border-color: grey;">
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/contactos"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Computadoras</font></font></a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/perfil"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Laptops</font></font></a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/contactos"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Impresoras</font></font></a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/perfil"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Celulares</font></font></a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/contactos"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;"></font></font></a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/perfil"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Cerrar sesión</font></font></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bloque_menu">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
            <div class="bloque_menu">
                <div class="bloque_sesion">
                    <div class="dropdown-center" style="background-color: black;">
                        <button id="buton_menu" class="btn btn-secondary dropdown-toggle" style="background-color: black; border-color: black;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit; background-color: black;"><font style="vertical-align: inherit; background-color: black;">
                            <?php echo 'Hola, ' . $_SESSION['sesion_ventas_nombres'] ?><!-- Hola, Roliber -->
                        </font></font></button>
                        <ul class="dropdown-menu" style="background-color: black; border-color: grey;">
                          <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/perfil"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Mi cuenta</font></font></a></li>
                          <!-- <li><a class="dropdown-item" onclick="cerrar_sesion();"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Cerrar sesión</font></font></a></li> -->
                          <button ><li onclick="cerrar_sesion();">Cerrar sesion</li></button>
                          <li><a class="dropdown-item" href="#"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Panel de Admin</font></font></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bloque_informacion">
                    <div class="bloque_info_contactos">
                        <a href="contactos.html"><img src="./views/plantilla/img/contactos.png" alt="localizacion" width="60px"></a>
                    </div>
                    <div class="bloque_info_carrito">
                        <a href="carrito.html"><img src="./views/plantilla/img/carrito.png" alt="localizacion" width="40px"></a>
                    </div>
                </div>
            </div>
        </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>/views/plantilla/css/style.css">
    <link rel="icon" href="../img/loguito.png" type="image/x-icon">
</head>
<body class="p-0 m-0 border-0 bd-example m-0 border-0">

    <div class="body">
        <div id="menu">
            <div class="bloque_menu">
                <div class="bloque1">
                    <a href="../index.html"><img src="./views/plantilla/img/loguito.png" alt="localizacion" width="60px"></a>
                </div>
                <div class="bloque1">
                    <a href="../index.html"><img src="./views/plantilla/img/letralogo.png" alt="localizacion" width="140px"></a>
                </div>

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
                            Hola, Roliber
                        </font></font></button>
                        <ul class="dropdown-menu" style="background-color: black; border-color: grey;">
                          <li><a class="dropdown-item" href="perfil.html"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Mi cuenta</font></font></a></li>
                          <li><a class="dropdown-item" href="login.html"><font style="vertical-align: inherit; color: white;"><font style="vertical-align: inherit;">Cerrar sesión</font></font></a></li>
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
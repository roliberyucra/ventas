<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <!-- Estilos Bootsatrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido al Sistema de Gestión Académica</h1>
        </div>
    <div class="container mt-5">
        <img src="./images/fondo.jpg" class="d-block w-100" alt="...">
        <div class="row text-center">
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Rol
                    </div>
                    <div class="card-body">
                        <p class="card-text">Agrega un nuevo Rol.</p>
                        <a href="content/formrol.php" class="btn btn-danger col-6">Agregar Rol</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Mostrar rol
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todos los roles agregados.</p>
                        <a href="content/verroles.php" class="btn btn-danger col-6">Ver Roles</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Usuario
                    </div>
                    <div class="card-body">
                        <p class="card-text">Registra un nuevo usuario.</p>
                        <a href="content/formusuario.php" class="btn btn-danger col-6">Registrar Usuario</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Ver Usuarios
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todos los usuarios registrados.</p>
                        <a href="content/verusuarios.php" class="btn btn-danger col-6">Ver Usuarios</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Docente
                    </div>
                    <div class="card-body">
                        <p class="card-text">Registrar un nuevo docente.</p>
                        <a href="content/formdocente.php" class="btn btn-danger col-6">Registrar Docente</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Ver Docente
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todos los docentes.</p>
                        <a href="content/verdocente.php" class="btn btn-danger col-6">Ver Docentes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Estudiantes
                    </div>
                    <div class="card-body">
                        <p class="card-text">Registra un nuevo estudiante.</p>
                        <a href="content/formestudiante.php" class="btn btn-danger col-6">Registrar Estudiante</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Ver Estudiantes
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todos los estudiantes registrados.</p>
                        <a href="content/verestudiante.php" class="btn btn-danger col-6">Ver Estudiantes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Curso
                    </div>
                    <div class="card-body">
                        <p class="card-text">Registra un nuevo curso.</p>
                        <a href="content/formcurso.php" class="btn btn-danger col-6">Registrar Curso</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Ver Cursos
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todos los cursos registrados.</p>
                        <a href="content/vercurso.php" class="btn btn-danger col-6">Ver Cursos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Agregar Nota
                    </div>
                    <div class="card-body">
                        <p class="card-text">Agrega una nueva nota.</p>
                        <a href="content/formnota.php" class="btn btn-danger col-6">Agregar Nota</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-1">
                <div class="card">
                    <div class="card-header">
                        Ver Notas
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ver todas las notas.</p>
                        <a href="content/vernota.php" class="btn btn-danger col-6">Ver Notas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="./images/fondo.jpg" alt="Logo de la Empresa">
            </div>
            <ul class="footer-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div class="footer-social">
                <a href="https://www.facebook.com/?locale=es_LA" class="social-icon"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="https://x.com/" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="https://www.instagram.com/" class="social-icon"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>
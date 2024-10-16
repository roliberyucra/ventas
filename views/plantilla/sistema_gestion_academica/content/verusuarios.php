<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios y Roles</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Sistema de Notas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="page/contactar.php">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <button type="button" class="btn btn-secondary mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5">
        
        <h2>Usuarios y Roles</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir archivo de conexión a la base de datos
                include '../conexion/conexion.php';

                // Consulta SQL para obtener la información de usuarios y roles
                $query = "
                    SELECT 
                        usuario.idUsuario,
                        usuario.nombreUsuario,
                        usuario.usuario,
                        usuario.clave,
                        rol.NombreRol
                    FROM 
                        usuario
                    JOIN 
                        rol ON usuario.idRol = rol.idRol";

                $result = $conexion->query($query);

                // Verificar si hay resultados
                if ($result->num_rows > 0) {
                    // Mostrar los usuarios y roles en una tabla
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['nombreUsuario']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['usuario']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['clave']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['NombreRol']) . "</td>";
                        echo "<td>";
                        echo "<a href='editarusuario.php?id={$row['idUsuario']}' class='btn btn-primary btn-sm'>Editar</a>";
                        echo "<a href='eliminarusuario.php?id={$row['idUsuario']}' class='btn btn-danger btn-sm ml-2' onclick='return confirm(\"¿Estás seguro de eliminar este usuario?\")'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo '<tr><td colspan="5">No hay usuarios registrados.</td></tr>';
                }

                // Cerrar conexión a la base de datos
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

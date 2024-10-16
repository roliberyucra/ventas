<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Docente</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Docente</h2>

        <?php
        // Conectar a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

        // Verificar conexión
        if ($mysqli->connect_error) {
            die("Conexión fallida: " . $mysqli->connect_error);
        }

        // Verificar si se ha enviado el formulario de edición
        if (isset($_POST['submit'])) {
            // Recibir y limpiar los datos del formulario (considera usar mysqli_real_escape_string o prepared statements para seguridad)
            $idDocente = $_GET['id'];
            $nombreDocente = $_POST['nombre'];
            $apellidoPaterno = $_POST['apellido_paterno'];
            $apellidoMaterno = $_POST['apellido_materno'];
            $telefono = $_POST['telefono'];

            // Construir la consulta SQL de actualización
            $sql = "UPDATE docente SET NombreDocente = '$nombreDocente', ApellidoPaterno = '$apellidoPaterno', ApellidoMaterno = '$apellidoMaterno', Telefono = '$telefono' WHERE idDocente = $idDocente";

            // Ejecutar la consulta SQL de actualización
            $result = $mysqli->query($sql);

            // Verificar si se realizó la actualización correctamente
            if ($result) {
                // Redirigir a la página de ver docentes después de actualizar
                header("Location: verdocente.php");
                exit;
            } else {
                // Mostrar mensaje de error si falla la actualización
                echo "Error al actualizar los datos: " . $mysqli->error;
            }
        } else {
            // Mostrar formulario de edición
            $idDocente = $_GET['id']; // Obtener el ID del docente desde la URL

            // Consultar la base de datos para obtener los datos del docente según el ID
            $sql = "SELECT * FROM docente WHERE idDocente = $idDocente";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>

                <form method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['NombreDocente']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido Paterno:</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?php echo htmlspecialchars($row['ApellidoPaterno']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellido_materno">Apellido Materno:</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?php echo htmlspecialchars($row['ApellidoMaterno']); ?>">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($row['Telefono']); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Guardar Cambios</button>
                    <a href="vernota.php" class="btn btn-secondary">Cancelar</a>
                </form>

                <?php
            } else {
                echo '<p>No se encontró el docente.</p>';
            }
        }

        // Cerrar conexión a la base de datos
        $mysqli->close();
        ?>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Editar Usuario</h2>
        <?php
        // Verificar si se ha proporcionado el ID del usuario
        if (isset($_GET['id'])) {
            $idUsuario = $_GET['id'];

            // Incluir archivo de conexión a la base de datos
            include '../conexion/conexion.php';

            // Consulta SQL para obtener la información del usuario
            $query = "SELECT * FROM usuario WHERE idUsuario = ?";
            
            // Preparar la consulta
            $stmt = $conexion->prepare($query);
            
            if ($stmt) {
                // Vincular parámetros
                $stmt->bind_param('i', $idUsuario);
                
                // Ejecutar consulta
                $stmt->execute();
                
                // Obtener resultado
                $result = $stmt->get_result();
                
                if ($result->num_rows == 1) {
                    // Mostrar formulario de edición
                    $row = $result->fetch_assoc();
                    ?>
                    <form action="guardar_edicion_usuario.php" method="post">
                        <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']; ?>">
                        <div class="form-group">
                            <label for="nombreUsuario">Nombre:</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo htmlspecialchars($row['nombreUsuario']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo htmlspecialchars($row['usuario']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="clave">Clave:</label>
                            <input type="password" class="form-control" id="clave" name="clave" value="<?php echo htmlspecialchars($row['clave']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="idRol">Rol:</label>
                            <select class="form-control" id="idRol" name="idRol" required>
                                <?php
                                // Consulta para obtener los roles disponibles
                                $queryRoles = "SELECT idRol, NombreRol FROM rol";
                                $resultRoles = $conexion->query($queryRoles);

                                if ($resultRoles->num_rows > 0) {
                                    while ($rol = $resultRoles->fetch_assoc()) {
                                        $selected = ($rol['idRol'] == $row['idRol']) ? 'selected' : '';
                                        echo "<option value='{$rol['idRol']}' $selected>{$rol['NombreRol']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                    <?php
                } else {
                    echo "<p>No se encontró el usuario.</p>";
                }
                
                // Cerrar consulta
                $stmt->close();
            } else {
                echo "Error en la preparación de la consulta: " . $conexion->error;
            }
            
            // Cerrar conexión a la base de datos
            $conexion->close();
        } else {
            echo "<p>Se requiere un ID de usuario para editar.</p>";
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

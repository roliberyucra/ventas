<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5 col-4">
        <h2>Crear Usuario</h2>
        
        <form id="crearUsuarioForm" action="../process/crearusuario.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombreUsuario">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
            </div>
            <div class="form-group">
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="clave">Clave:</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select id="rol" name="rol" class="form-control" required>
                    <option value="">Seleccione un Rol</option>
                    <?php   
                    include '../conexion/conexion.php';
                    $query = "SELECT idRol, NombreRol FROM rol";
                    $result = $conexion->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value=\"" . $row['idRol'] . "\">" . $row['NombreRol'] . "</option>";
                        }
                    } else {
                        echo "No se encontraron roles.";
                    }
                    $conexion->close();
                    ?>
                </select>
            </div>
            <button type="submit" onclick="window.location.href='../content/verusuarios.php'" class="btn btn-danger">Crear Usuario</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para recargar la página después de enviar el formulario
        document.getElementById('crearUsuarioForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Previene el envío del formulario
            var form = this;
            var formData = new FormData(form);

            // Realizar la solicitud AJAX
            var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Recargar la página si la solicitud fue exitosa
                    location.reload();
                } else {
                    // Manejar errores
                    console.error('Error al crear el Usuario:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de red al crear el Usuario');
            };
            xhr.send(new URLSearchParams(formData)); // Enviar los datos del formulario
        });
    </script>
</body>
</html>

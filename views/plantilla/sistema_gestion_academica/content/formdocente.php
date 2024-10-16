<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Docente</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5 col-4">
        <h2>Crear Docente</h2>
        
        <form id="crearDocenteForm" action="../process/creardocente.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombreDocente">Nombre:</label>
                <input type="text" class="form-control" id="nombreDocente" name="nombreDocente" required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <button type="submit" onclick="window.location.href='../content/verdocente.php'" class="btn btn-danger">Crear Docente</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para recargar la página después de enviar el formulario
        document.getElementById('crearDocenteForm').addEventListener('submit', function(event) {
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
                    console.error('Error al crear el Docente:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de red al crear el Docente');
            };
            xhr.send(new URLSearchParams(formData)); // Enviar los datos del formulario
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiante</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5 col-4">
        <h2>Registrar Estudiante</h2>
        
        <form id="crearEstudianteForm" action="../process/crearestudiante.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombreEstudiante">Nombre:</label>
                <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" required>
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
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
            </div>
            <button type="submit" onclick="window.location.href='./verestudiante.php'" class="btn btn-danger">Registrar Estudiante</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para recargar la página después de enviar el formulario
        document.getElementById('crearEstudianteForm').addEventListener('submit', function(event) {
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
                    console.error('Error al crear el Estudiante:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de red al crear el Estudiante');
            };
            xhr.send(new URLSearchParams(formData)); // Enviar los datos del formulario
        });
    </script>
</body>
</html>

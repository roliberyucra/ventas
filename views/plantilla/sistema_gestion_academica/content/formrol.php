<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Rol</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5">
        
        <h2>Agregar Rol</h2>
        <form id="crearRolForm" action="../process/crearol.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombreRol">Nombre del Rol:</label>
                <input type="text" class="form-control" id="nombreRol" name="nombreRol" required>
            </div>
            <button type="submit" onclick="window.location.href='../content/verroles.php'" class="btn btn-danger">Agregar Rol</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para recargar la página después de enviar el formulario
        document.getElementById('crearRolForm').addEventListener('submit', function(event) {
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
                    console.error('Error al crear el rol:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de red al crear el rol');
            };
            xhr.send(new URLSearchParams(formData)); // Enviar los datos del formulario
        });
    </script>
</body>
</html>

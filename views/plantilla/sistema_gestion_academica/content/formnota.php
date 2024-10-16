<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nota</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5 col-4">
        <h2>Registrar Nota</h2>
        
        <form id="crearNotaForm" action="../process/crearnota.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="valorNota">Valor de la Nota:</label>
                <input type="number" step="0.01" class="form-control" id="valorNota" name="valorNota" required>
            </div>
            <div class="form-group">
                <label for="idCurso">Curso:</label>
                <select class="form-control" id="idCurso" name="idCurso" required>
                    <option value="">Seleccione un Curso</option>
                    <?php include '../process/relacionarn_c.php'; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="idEstudiante">Estudiante:</label>
                <select class="form-control" id="idEstudiante" name="idEstudiante" required>
                    <option value="">Seleccione un Estudiante</option>
                    <?php include '../process/relacionarn_e.php'; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="idDocente">Docente:</label>
                <select class="form-control" id="idDocente" name="idDocente" required>
                    <option value="">Seleccione un Docente</option>
                    <?php include '../process/relacionarn_d.php'; ?>
                </select>
            </div>
            <button type="submit" onclick="window.location.href='../content/vernota.php'" class="btn btn-danger">Crear Nota</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Función para recargar la página después de enviar el formulario
        document.getElementById('crearNotaForm').addEventListener('submit', function(event) {
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
                    console.error('Error al crear la Nota:', xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Error de red al crear la Nota');
            };
            xhr.send(new URLSearchParams(formData)); // Enviar los datos del formulario
        });
    </script>
</body>
</html>


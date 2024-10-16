<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5">

        <h2 class="mt-5">Roles</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Contenido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../view/mostrarroles.php';
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Cargar las notas al cargar la página
            cargarNotas();

            // Manejar el envío del formulario
            $('#notaForm').submit(function(e) {
                e.preventDefault();
                agregarNota();
            });
        });

        function cargarNotas() {
            $.ajax({
                url: 'https://tu-api.com/notas', // Cambia esto por la URL de tu API
                method: 'GET',
                success: function(data) {
                    var notasTable = $('#notasTable');
                    notasTable.empty();
                    data.forEach(function(nota) {
                        notasTable.append('<tr><td>' + nota.id + '</td><td>' + nota.titulo + '</td><td>' + nota.contenido + '</td></tr>');
                    });
                },
                error: function(error) {
                    console.error('Error al cargar las notas:', error);
                }
            });
        }

        function agregarNota() {
            var titulo = $('#titulo').val();
            var contenido = $('#contenido').val();

            $.ajax({
                url: 'https://tu-api.com/notas', // Cambia esto por la URL de tu API
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    titulo: titulo,
                    contenido: contenido
                }),
                success: function() {
                    $('#notaForm')[0].reset();
                    cargarNotas();
                },
                error: function(error) {
                    console.error('Error al agregar la nota:', error);
                }
            });
        }
    </script>
</body>
</html>

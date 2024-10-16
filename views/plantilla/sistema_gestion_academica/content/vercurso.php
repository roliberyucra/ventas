<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>

    <div class="container mt-5">
        <h2>Lista de Cursos</h2>

        <?php
        // Conectar a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

        // Verificar conexión
        if ($mysqli->connect_error) {
            die("Conexión fallida: " . $mysqli->connect_error);
        }

        // Consultar la base de datos para obtener la lista de cursos
        $sql = "SELECT * FROM curso";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-striped mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre del Curso</th>
                            <th>Estado del Curso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>';

            // Mostrar cada curso en una fila de la tabla
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . htmlspecialchars($row['NombreCurso']) . '</td>
                        <td>' . htmlspecialchars($row['EstadoCurso']) . '</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="editarcurso.php?id=' . urlencode($row['idCurso']) . '">Editar</a>
                            <a class="btn btn-danger btn-sm" href="eliminarcurso.php?id=' . urlencode($row['idCurso']) . '" onclick="return confirm(\'¿Estás seguro de que quieres eliminar este curso?\');">Eliminar</a>
                        </td>
                      </tr>';
            }

            echo '</tbody>
                </table>';
        } else {
            echo '<p>No hay cursos en la base de datos.</p>';
        }

        // Cerrar conexión a la base de datos
        $mysqli->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

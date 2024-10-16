<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Docentes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>

    <div class="container mt-5">
        <h2>Lista de Docentes</h2>

        <?php
        // Conectar a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

        // Verificar conexión
        if ($mysqli->connect_error) {
            die("Conexión fallida: " . $mysqli->connect_error);
        }

        // Consultar la base de datos para obtener la lista de estudiantes
        $sql = "SELECT * FROM docente";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="table table-striped mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>';

            // Mostrar cada estudiante en una fila de la tabla
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . htmlspecialchars($row['NombreDocente']) . '</td>
                        <td>' . htmlspecialchars($row['ApellidoPaterno']) . '</td>
                        <td>' . htmlspecialchars($row['ApellidoMaterno']) . '</td>
                        <td>' . htmlspecialchars($row['Telefono']) . '</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="editardocente.php?id=' . urlencode($row['idDocente']) . '">Editar</a>
                            <a class="btn btn-danger btn-sm" href="deletedocente.php?id=' . urlencode($row['idDocente']) . '" onclick="return confirm(\'¿Estás seguro de que quieres eliminar este estudiante?\');">Eliminar</a>
                        </td>
                      </tr>';
            }

            echo '</tbody>
                </table>';
        } else {
            echo '<p>No hay docentes en la base de datos.</p>';
        }

        $mysqli->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

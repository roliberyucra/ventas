<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <!-- Stilos bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <button type="button" class="btn btn-danger mb-4" onclick="window.location.href='../index.php'">Regresar al Inicio</button>
    <div class="container mt-5">
        <h2>Sistema de Notas</h2>
        <table class="table table-striped mt-3">
            <tbody>
            <?php
include '../conexion/conexion.php';

$sql = "
        SELECT 
            nota.idNota,
            nota.ValorNota,
            curso.NombreCurso,
            CONCAT(estudiante.NombreEstudiante, ' ', estudiante.ApellidoPaterno, ' ', estudiante.ApellidoMaterno) AS NombreEstudiante,
            CONCAT(docente.NombreDocente, ' ', docente.ApellidoPaterno, ' ', docente.ApellidoMaterno) AS NombreDocente
        FROM 
            nota
        JOIN 
            curso ON nota.idCurso = curso.idCurso
        JOIN 
            estudiante ON nota.idEstudiante = estudiante.idEstudiante
        JOIN 
            docente ON nota.idDocente = docente.idDocente
    ";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    echo '<table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Valor de Nota</th>
                    <th>Curso</th>
                    <th>Estudiante</th>
                    <th>Docente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . htmlspecialchars($row['ValorNota']) . '</td>
                <td>' . htmlspecialchars($row['NombreCurso']) . '</td>
                <td>' . htmlspecialchars($row['NombreEstudiante']) . '</td>
                <td>' . htmlspecialchars($row['NombreDocente']) . '</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="editarnota.php?id=' . urlencode($row['idNota']) . '">Editar</a>
                    <a class="btn btn-danger btn-sm" href="eliminarnota.php?id=' . urlencode($row['idNota']) . '" onclick="return confirm(\'¿Estás seguro de que quieres eliminar esta nota?\');">Eliminar</a>
                </td>
              </tr>';
    }

    echo '</tbody>
        </table>';
} else {
    echo '<p>No hay notas registradas.</p>';
}

$conexion->close();
?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

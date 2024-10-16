<?php
// Incluir el archivo de conexión a la base de datos
include '../conexion/conexion.php';

// Consultar la base de datos para obtener la lista de cursos
$sql = "SELECT * FROM curso";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . htmlspecialchars($row['NombreCurso']) . '</td>
                <td>' . htmlspecialchars($row['EstadoCurso']) . '</td>
              </tr>';
    }
} else {
    echo '<tr><td colspan="3">No hay cursos registrados.</td></tr>';
}

// Cerrar conexión a la base de datos
$conexion->close();
?>

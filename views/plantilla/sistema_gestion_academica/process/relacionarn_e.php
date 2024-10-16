<?php
include '../conexion/conexion.php';
$query = "SELECT idEstudiante, NombreEstudiante FROM estudiante";
$result = $conexion->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value=\"" . $row['idEstudiante'] . "\">" . $row['NombreEstudiante'] . "</option>";
    }
} else {
    echo "No se encontraron estudiantes.";
}
$conexion->close();
?>
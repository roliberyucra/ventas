<?php
include '../conexion/conexion.php';
$query = "SELECT idDocente, CONCAT(NombreDocente, ' ', ApellidoPaterno, ' ', ApellidoMaterno) AS NombreCompleto FROM docente";
$result = $conexion->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value=\"" . $row['idDocente'] . "\">" . $row['NombreCompleto'] . "</option>";
    }
} else {
    echo "No se encontraron docentes.";
}
$conexion->close();
?>
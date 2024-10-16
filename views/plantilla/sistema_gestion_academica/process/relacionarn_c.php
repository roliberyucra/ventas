<?php
    include '../conexion/conexion.php';
    $query = "SELECT idCurso, NombreCurso FROM curso";
    $result = $conexion->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"" . $row['idCurso'] . "\">" . $row['NombreCurso'] . "</option>";
        }
    } else {
    echo "No se encontraron cursos.";
    }
    $conexion->close();
?>

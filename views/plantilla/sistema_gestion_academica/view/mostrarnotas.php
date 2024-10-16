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
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['ValorNota']}</td><td>{$row['NombreCurso']}</td><td>{$row['NombreEstudiante']}</td><td>{$row['NombreDocente']}</td></tr>";
}
$conexion->close();
?>
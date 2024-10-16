<?php
include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorNota = $_POST['valorNota'];
        $idCurso = $_POST['idCurso'];
        $idEstudiante = $_POST['idEstudiante'];
        $idDocente = $_POST['idDocente'];
        $sql = "INSERT INTO nota (ValorNota, idCurso, idEstudiante, idDocente) VALUES ('$valorNota', '$idCurso', '$idEstudiante', '$idDocente')";
        if ($conexion->query($sql) === TRUE) {
            echo "Nueva nota creada correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>

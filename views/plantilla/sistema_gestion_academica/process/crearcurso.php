<?php
include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreCurso = $_POST['nombreCurso'];
        $estadoCurso = $_POST['estadoCurso'];
        $sql = "INSERT INTO curso (NombreCurso, EstadoCurso) VALUES ('$nombreCurso', '$estadoCurso')";
        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo curso creado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>
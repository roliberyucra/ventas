<?php
include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreDocente = $_POST['nombreDocente'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $telefono = $_POST['telefono'];
        $sql = "INSERT INTO docente (NombreDocente, ApellidoPaterno, ApellidoMaterno, Telefono) VALUES ('$nombreDocente', '$apellidoPaterno', '$apellidoMaterno', '$telefono')";
        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo docente creado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>

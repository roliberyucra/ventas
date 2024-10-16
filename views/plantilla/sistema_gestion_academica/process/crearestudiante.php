<?php
include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreEstudiante = $_POST['nombreEstudiante'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $sql = "INSERT INTO estudiante (NombreEstudiante, ApellidoPaterno, ApellidoMaterno, Dni, Telefono, Correo, Fecha_Nacimiento) VALUES ('$nombreEstudiante', '$apellidoPaterno', '$apellidoMaterno', '$dni', '$telefono', '$correo', '$fechaNacimiento')";
        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo estudiante creado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>

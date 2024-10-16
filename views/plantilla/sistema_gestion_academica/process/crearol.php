<?php
    include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreRol = $_POST['nombreRol'];
        $sql = "INSERT INTO rol (NombreRol) VALUES ('$nombreRol')";
        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo rol creado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>

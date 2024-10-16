<?php
    include '../conexion/conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombreUsuario = $_POST['nombreUsuario'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $idRol = $_POST['rol'];
        $sql = "INSERT INTO usuario (nombreUsuario, usuario, clave, idRol) VALUES ('$nombreUsuario', '$usuario', '$clave', $idRol)";
        if ($conexion->query($sql) === TRUE) {
            echo "Nuevo usuario creado correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
        $conexion->close();
    }
?>

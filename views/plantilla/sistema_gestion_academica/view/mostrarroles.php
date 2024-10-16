<?php
    include '../conexion/conexion.php';
        $result = $conexion->query("SELECT * FROM rol");
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['NombreRol']}</td></tr>";
        }
    $conexion->close();
?>
<?php
include '../conexion/conexion.php';
$query = "
        SELECT 
            usuario.idUsuario,
            usuario.nombreUsuario,
            usuario.usuario,
            usuario.clave,
            rol.NombreRol
        FROM 
            usuario
        JOIN 
            rol ON usuario.idRol = rol.idRol";
$result = $conexion->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nombreUsuario']}</td><td>{$row['usuario']}</td><td>{$row['clave']}</td><td>{$row['NombreRol']}</td></tr>";
}

$conexion->close();
?>
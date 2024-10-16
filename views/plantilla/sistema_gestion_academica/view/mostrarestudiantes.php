<?php
    include '../conexion/conexion.php';
        $result = $conexion->query("SELECT * FROM estudiante");
        while($row = $result->fetch_assoc()) {
            echo "  <tr>
                        <td>{$row['NombreEstudiante']}</td>
                        <td>{$row['ApellidoPaterno']}</td>
                        <td>{$row['ApellidoMaterno']}</td>
                        <td>{$row['Dni']}</td>
                        <td>{$row['Telefono']}</td>
                        <td>{$row['Correo']}</td>
                        <td>{$row['Fecha_Nacimiento']}</td>
                    </tr>";
        }
    $conexion->close();
?>
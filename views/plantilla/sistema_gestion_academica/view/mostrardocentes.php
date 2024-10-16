<?php
    include '../conexion/conexion.php';
    $result = $conexion->query("SELECT * FROM docente");
        while($row = $result->fetch_assoc()) {
            echo "  <tr>
                        <td>{$row['NombreDocente']}</td>
                        <td>{$row['ApellidoPaterno']}</td>
                        <td>{$row['ApellidoMaterno']}</td>
                        <td>{$row['Telefono']}</td>
                    </tr>";
        }
    $conexion->close();
?>
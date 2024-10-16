<?php
include '../conexion/conexion.php';

// Verificar si se ha enviado el ID de la nota a eliminar
if (isset($_GET['id'])) {
    $idNota = $_GET['id'];

    // Preparar la consulta SQL para eliminar la nota
    $sql = "DELETE FROM nota WHERE idNota = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo "Error al preparar la consulta.";
    } else {
        // Vincular el parámetro
        $stmt->bind_param("i", $idNota);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir a vernota.php después de eliminar la nota
            header("Location: vernota.php");
            exit(); // Asegurar que el script se detiene después de la redirección
        } else {
            echo "Error al eliminar la nota: " . $stmt->error;
        }

        // Cerrar la consulta preparada
        $stmt->close();
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

<?php
// Verificar que el ID se haya enviado por GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID del estudiante no especificado.");
}

// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "Gettherefast_112", "sistema_gestion_academica");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Obtener el ID del estudiante desde la URL
$id = $mysqli->real_escape_string($_GET['id']);

// Preparar la consulta de eliminación
$sql = "DELETE FROM estudiante WHERE Dni = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("s", $id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Estudiante eliminado correctamente.";
        // Redirigir a la página principal después de eliminar
        header("Location:verestudiante.php"); // Cambia "index.php" por el nombre de tu página principal
        exit();
    } else {
        echo "Error al eliminar el estudiante: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error al preparar la consulta: " . $mysqli->error;
}

$mysqli->close();
?>
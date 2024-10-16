<?php
// Verificar si se ha proporcionado el ID del usuario
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Incluir archivo de conexión a la base de datos
    include '../conexion/conexion.php';

    // Consulta SQL para eliminar usuario
    $query = "DELETE FROM usuario WHERE idUsuario = ?";

    // Preparar la consulta
    $stmt = $conexion->prepare($query);

    if ($stmt) {
        // Vincular parámetros
        $stmt->bind_param('i', $idUsuario);

        // Ejecutar consulta
        if ($stmt->execute()) {
            // Redirigir de vuelta a la página principal de usuarios
            header("Location: verusuarios.php");
            exit();
        } else {
            echo "Error al intentar eliminar el usuario.";
        }

        // Cerrar consulta
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conexion->error;
    }

    // Cerrar conexión a la base de datos
    $conexion->close();
} else {
    echo "ID de usuario no especificado.";
}
?>

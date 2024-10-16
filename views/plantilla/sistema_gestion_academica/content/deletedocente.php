<?php
// Verificar si se ha enviado la solicitud de eliminación
if (isset($_GET['id'])) {
    $idDocente = $_GET['id']; // Obtener el ID del docente desde la URL

    // Conectar a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

    // Verificar conexión
    if ($mysqli->connect_error) {
        die("Conexión fallida: " . $mysqli->connect_error);
    }

    // Consultar la base de datos para eliminar el docente
    $sql = "DELETE FROM docente WHERE idDocente = $idDocente";
    $result = $mysqli->query($sql);

    // Verificar si se realizó la eliminación correctamente
    if ($result) {
        echo "<script>alert('Docente eliminado correctamente');</script>";
    } else {
        echo "<script>alert('Error al eliminar el docente');</script>";
    }

    // Redireccionar a la página de ver docentes después de eliminar
    echo "<script>window.location.href = 'vernota.php';</script>";

    // Cerrar conexión a la base de datos
    $mysqli->close();
} else {
    // Si no se proporcionó el ID del docente a eliminar, mostrar mensaje de error
    echo "<script>alert('ID de docente no proporcionado');</script>";
    echo "<script>window.location.href = 'vernota.php';</script>";
}
?>

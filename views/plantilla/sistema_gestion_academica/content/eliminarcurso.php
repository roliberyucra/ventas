<?php
// Verificar si se ha proporcionado un ID válido en la URL y si se ha confirmado la eliminación
if (isset($_GET['id']) && !empty(trim($_GET['id'])) && isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    // Incluir el archivo de conexión a la base de datos
    include '../conexion/conexion.php';

    // Preparar la consulta SQL para eliminar el curso con el ID proporcionado
    $idCurso = $conexion->real_escape_string($_GET['id']);
    $sql = "DELETE FROM curso WHERE idCurso = '$idCurso'";
    
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar a la página principal de cursos después de la eliminación exitosa
        header("Location: mostrarcursos.php");
        exit();
    } else {
        echo "Error al intentar eliminar el curso: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // Si no se proporcionó un ID válido o no se confirmó la eliminación, redireccionar a la página principal de cursos
    header("Location: vercurso.php");
    exit();
}
?>

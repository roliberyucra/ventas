<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $table = $_POST['table'];
    $idColumn = '';

    switch ($table) {
        case 'rol':
            $idColumn = 'idRol';
            break;
        case 'usuario':
            $idColumn = 'idUsuario';
            break;
        case 'docente':
            $idColumn = 'idDocente';
            break;
        case 'curso':
            $idColumn = 'idCurso';
            break;
        case 'estudiante':
            $idColumn = 'idEstudiante';
            break;
        case 'nota':
            $idColumn = 'idNota';
            break;
    }

    $sql = "DELETE FROM $table WHERE $idColumn = $id";
    if ($conexion->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
    $conexion->close();
    header("Location: index.php");
}
?>
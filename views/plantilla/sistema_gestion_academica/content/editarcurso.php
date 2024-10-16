<?php
// Verificar si se ha proporcionado un ID válido en la URL
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    // Incluir el archivo de conexión a la base de datos
    include '../conexion/conexion.php';

    // Preparar la consulta SQL para seleccionar el curso con el ID proporcionado
    $idCurso = $conexion->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM curso WHERE idCurso = '$idCurso'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        // Obtener los datos del curso
        $curso = $result->fetch_assoc();
        $nombreCurso = $curso['NombreCurso'];
        $estadoCurso = $curso['EstadoCurso'];
    } else {
        // Si no se encontró el curso, redireccionar a la página principal de cursos
        header("Location: vercurso.php");
        exit();
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // Si no se proporcionó un ID válido, redireccionar a la página principal de cursos
    header("Location: vercurso.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Editar Curso</h2>
        <form action="actualizarcurso.php" method="POST">
            <input type="hidden" name="idCurso" value="<?php echo htmlspecialchars($idCurso); ?>">

            <div class="form-group">
                <label for="nombreCurso">Nombre del Curso:</label>
                <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" value="<?php echo htmlspecialchars($nombreCurso); ?>">
            </div>

            <div class="form-group">
                <label for="estadoCurso">Estado del Curso:</label>
                <input type="text" class="form-control" id="estadoCurso" name="estadoCurso" value="<?php echo htmlspecialchars($estadoCurso); ?>">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="vercurso.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
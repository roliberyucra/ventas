<?php
// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han proporcionado los parámetros necesarios
    if (isset($_POST['idCurso'], $_POST['nombreCurso'], $_POST['estadoCurso'])) {
        // Obtener los datos del formulario
        $idCurso = $_POST['idCurso'];
        $nombreCurso = $_POST['nombreCurso'];
        $estadoCurso = $_POST['estadoCurso'];

        // Conectar a la base de datos
        $mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

        // Verificar conexión
        if ($mysqli->connect_error) {
            die("Conexión fallida: " . $mysqli->connect_error);
        }

        // Actualizar el curso en la base de datos
        $sql = "UPDATE curso SET NombreCurso = ?, EstadoCurso = ? WHERE idCurso = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssi", $nombreCurso, $estadoCurso, $idCurso);

        if ($stmt->execute()) {
            // Redireccionar a la página mostrarcursos.php con mensaje de éxito
            header("Location: vercurso.php?mensaje=Curso actualizado correctamente");
            exit();
        } else {
            // Redireccionar a la página mostrarcursos.php con mensaje de error
            header("Location: vercurso.php?mensaje=Error al actualizar el curso");
            exit();
        }

        // Cerrar la conexión a la base de datos
        $mysqli->close();
    } else {
        // Si no se proporcionaron todos los parámetros necesarios
        echo '<p>No se han proporcionado todos los datos necesarios para actualizar el curso.</p>';
    }
} else {
    // Si no se envió el formulario por método POST
    echo '<p>Error: Método no permitido para procesar el formulario.</p>';
}
?>

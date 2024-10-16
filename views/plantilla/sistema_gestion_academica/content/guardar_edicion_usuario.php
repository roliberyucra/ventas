<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que se hayan enviado todos los datos necesarios
    if (isset($_POST['idUsuario'], $_POST['nombreUsuario'], $_POST['usuario'], $_POST['clave'], $_POST['idRol'])) {
        // Obtener los datos del formulario
        $idUsuario = $_POST['idUsuario'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $idRol = $_POST['idRol'];

        // Incluir archivo de conexión a la base de datos
        include '../conexion/conexion.php';

        // Consulta SQL para actualizar usuario
        $query = "UPDATE usuario SET nombreUsuario = ?, usuario = ?, clave = ?, idRol = ? WHERE idUsuario = ?";

        // Preparar la consulta
        $stmt = $conexion->prepare($query);

        if ($stmt) {
            // Vincular parámetros
            $stmt->bind_param('sssii', $nombreUsuario, $usuario, $clave, $idRol, $idUsuario);

            // Ejecutar consulta
            if ($stmt->execute()) {
                // Redirigir a verusuario.php
                header("Location: verusuarios.php?id={$idUsuario}");
                exit();
            } else {
                echo "Error al intentar actualizar el usuario.";
            }

            // Cerrar consulta
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conexion->error;
        }

        // Cerrar conexión a la base de datos
        $conexion->close();
    } else {
        echo "Todos los campos son requeridos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>

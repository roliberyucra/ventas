<?php
include '../conexion/conexion.php';

// Función para limpiar datos de entrada
function limpiarInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verificar si se ha enviado el formulario de actualización
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idNota'])) {
    $idNota = limpiarInput($_POST['idNota']);
    $nuevaValorNota = limpiarInput($_POST['nuevaValorNota']);

    // Preparar la consulta SQL para actualizar la nota
    $sql = "UPDATE nota SET ValorNota = ? WHERE idNota = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo "Error al preparar la consulta.";
    } else {
        // Vincular los parámetros
        $stmt->bind_param("si", $nuevaValorNota, $idNota);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir a vernota.php después de guardar los cambios
            header("Location: vernota.php?id=" . urlencode($idNota));
            exit(); // Asegurar que el script se detiene después de la redirección
        } else {
            echo "Error al actualizar la nota: " . $stmt->error;
        }

        // Cerrar la consulta preparada
        $stmt->close();
    }
}

// Obtener el ID de la nota desde el parámetro GET
if (isset($_GET['id'])) {
    $idNota = limpiarInput($_GET['id']);

    // Consultar la nota específica
    $sql = "SELECT * FROM nota WHERE idNota = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo "Error al preparar la consulta.";
    } else {
        // Vincular el parámetro
        $stmt->bind_param("i", $idNota);

        // Ejecutar la consulta
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $valorNota = $row['ValorNota'];
            $idCurso = $row['idCurso'];
            $idEstudiante = $row['idEstudiante'];
            $idDocente = $row['idDocente'];

            // Mostrar el formulario de edición
            ?>
            <!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar Nota</title>
                <!-- Stilos bootstrap -->
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            </head>
            <body>
                <div class="container mt-5">
                    <h2>Editar Nota</h2>
                    <form action="editarnota.php" method="POST">
                        <input type="hidden" name="idNota" value="<?php echo htmlspecialchars($idNota); ?>">
                        <div class="form-group">
                            <label for="valorNota">Valor de Nota:</label>
                            <input type="text" class="form-control" id="valorNota" name="nuevaValorNota" value="<?php echo htmlspecialchars($valorNota); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="vernota.php" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>

                <!-- Bootstrap JS and dependencies -->
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </body>
            </html>
            <?php

        } else {
            echo "No se encontró la nota.";
        }

        // Cerrar la consulta preparada
        $stmt->close();
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

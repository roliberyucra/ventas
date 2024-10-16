<?php
// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

// Obtener los datos del formulario
$Dni = isset($_POST['Dni']) ? $_POST['Dni'] : '';
$NombreEstudiante = isset($_POST['NombreEstudiante']) ? $_POST['NombreEstudiante'] : '';
$ApellidoPaterno = isset($_POST['ApellidoPaterno']) ? $_POST['ApellidoPaterno'] : '';
$ApellidoMaterno = isset($_POST['ApellidoMaterno']) ? $_POST['ApellidoMaterno'] : '';
$Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : '';
$Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
$Fecha_Nacimiento = isset($_POST['Fecha_Nacimiento']) ? $_POST['Fecha_Nacimiento'] : '';

// Preparar la consulta SQL para actualizar el registro
$sql = "UPDATE estudiante SET NombreEstudiante = ?, ApellidoPaterno = ?, ApellidoMaterno = ?, Telefono = ?, Correo = ?, Fecha_Nacimiento = ? WHERE Dni = ?";
$stmt = $mysqli->prepare($sql);

if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $mysqli->error);
}

// Enlazar los parámetros
$stmt->bind_param('sssssss', $NombreEstudiante, $ApellidoPaterno, $ApellidoMaterno, $Telefono, $Correo, $Fecha_Nacimiento, $Dni);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro actualizado exitosamente.";
} else {
    echo "Error al actualizar el registro: " . $stmt->error;
}

header('location:./verestudiante.php');

// Cerrar declaración
$stmt->close();

// Cerrar conexión
$mysqli->close();
?>

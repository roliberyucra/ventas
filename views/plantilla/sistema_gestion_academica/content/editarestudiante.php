<?php
// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "", "sistema_gestion_academica");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

$Dni = $_GET['id'];

// Preparar y ejecutar la consulta
$sql = "SELECT * FROM estudiante WHERE Dni = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $Dni);
$stmt->execute();
$result = $stmt->get_result();
$estudiante = $result->fetch_assoc();

$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Estudiante</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modificar Estudiante</h1>
        <form action="modificar.php" method="post">
            <input type="hidden" name="Dni" value="<?php echo htmlspecialchars($estudiante['Dni']); ?>">
            <div class="form-group">
                <label for="NombreEstudiante">Nombre:</label>
                <input type="text" class="form-control" id="NombreEstudiante" name="NombreEstudiante" value="<?php echo htmlspecialchars($estudiante['NombreEstudiante']); ?>" required>
            </div>
            <div class="form-group">
                <label for="ApellidoPaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php echo htmlspecialchars($estudiante['ApellidoPaterno']); ?>" required>
            </div>
            <div class="form-group">
                <label for="ApellidoMaterno">Apellido Materno:</label>
                <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php echo htmlspecialchars($estudiante['ApellidoMaterno']); ?>" required>
            </div>
            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo htmlspecialchars($estudiante['Telefono']); ?>">
            </div>
            <div class="form-group">
                <label for="Correo">Correo:</label>
                <input type="email" class="form-control" id="Correo" name="Correo" value="<?php echo htmlspecialchars($estudiante['Correo']); ?>">
            </div>
            <div class="form-group">
                <label for="Fecha_Nacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="Fecha_Nacimiento" name="Fecha_Nacimiento" value="<?php echo htmlspecialchars($estudiante['Fecha_Nacimiento']); ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Modificar">
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

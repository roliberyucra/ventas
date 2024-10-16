<div id="form-insert-control">
    <form action="./insert-categoria.php" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre de categoria: </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nommbre*" name="nombreCat">
    </div>
    <!--
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">TextArea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    -->
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Detalle de la categoria: </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Detalles*" name="detalleCat">
    </div>
    <center>
        <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button>
    </center>
    </form>
</div>

<?php
include './database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombreCat"];
    $detalle = $_POST["detalleCat"];

    $query = "INSERT INTO curso (nombre, detalle) VALUES ('$nombre', '$detalle')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ./view-categoria.php");
        exit();
    } else {
        echo "Error al registrar la categoria: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

<?php

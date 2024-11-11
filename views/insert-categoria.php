<div id="form-control">
    <form action="" id="formInsertCategoria">
        <center><h3><b>Formulario de registro de categoria</b></h3></center>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de categoria: </label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre*" name="nombre">
    </div>

    <div class="mb-3">
        <label for="detalle" class="form-label">Detalle de la categoria: </label>
        <input type="text" class="form-control" id="detalle" placeholder="Detalles*" name="detalle">
    </div>
    <center>
        <button type="button" onclick="insertar_categoria()" class="btn btn-danger">Insertar</button>
        <!-- <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button> -->
    </center>
    </form>
</div>
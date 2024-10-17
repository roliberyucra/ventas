<div id="form-control">
    <form action="">
        <center><h3><b>Actualizar infromación de producto</b></h3></center>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Código: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Código de producto*" name="codigo">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de producto*" name="nombre">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Detalle: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Detalles del producto*" name="detalle">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Precio: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" min="1" max="90000" step="0.10" placeholder="Precio*" name="precio">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" min="1" max="999999" placeholder="Stock*" name="stock">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha vencimiento: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Fecha de vencimiento*" name="fechaVencimiento" not required>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen de producto 1: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="imagen_1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen de producto 2: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="imagen_2">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen de producto 3: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="imagen_3">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Imagen de producto 4: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="imagen_4">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID categoria: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID categoria*" name="idCategoria">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID proveedor: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID proveedor*" name="idProveedor">
    </div>
    <center>
        <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button>
    </center>
    </form>
</div>
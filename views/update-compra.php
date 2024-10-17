<div id="form-control">
    <form action="">
        <center><h3><b>Actualizar información de compra</b></h3></center>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID de producto: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID producto*" name="idProducto">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cantidad: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cantidad*" name="cantidad">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Precio: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Precio*" min="1" max="90000" step="0.10" name="precio">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de compra: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Fecha*" name="fechaCompra">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID de persona: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID persona*" name="idPersona">
    </div>
    <center>
        <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button>
    </center>
    </form>
</div>
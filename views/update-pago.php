<div id="form-control">
    <form action="">
        <center><h3><b>Actualizar información de pago</b></h3></center>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID de venta: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="ID de venta*" name="idVenta">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha de pago: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Fecha*" name="fecha">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Monto: </label>
        <input type="number" class="form-control" id="exampleFormControlInput1" min="1" max="90000" step="0.10" placeholder="Monto*" name="monto">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Método de pago: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Método de pago*" name="metodoPago">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estado: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Estado*" name="estadoPago">
    </div>
    <center>
        <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button>
    </center>
    </form>
</div>
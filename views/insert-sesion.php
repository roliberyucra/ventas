<div id="form-control">
    <form action="">
        <center><h3><b>Formulario de registro de sesiones</b></h3></center>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">ID persona: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Código de producto*" name="codigo">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha y hora de ingreso: </label>
        <input type="datetime-local" class="form-control" id="exampleFormControlInput1" name="fechaHoraIngreso">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fecha y hora de salida: </label>
        <input type="datetime-local" class="form-control" id="exampleFormControlInput1" name="fechaHoraSalida">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Token: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Token*" name="token">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">IP: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="IP*" name="ip">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Dispositivo: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dispositivo*" name="dispositivo" not required>
    </div>
    <center>
        <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button>
    </center>
    </form>
</div>
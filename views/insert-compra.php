<div id="form-control">
    <form action="" id="formInsertCompra">
        <center><h3><b>Formulario de registro de compra</b></h3></center>

    <div class="mb-3">
        <label for="idProveedor" class="form-label">Producto: </label>
        <select class="form-control" name="idProducto" id="idProducto" required>
        <option disabled>Seleccione</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad: </label>
        <input type="text" class="form-control" id="cantidad" placeholder="Cantidad*" name="cantidad">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio: </label>
        <input type="number" class="form-control" id="precio" placeholder="Precio*" min="1" max="90000" step="0.10" name="precio">
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de compra: </label>
        <input type="date" class="form-control" id="fecha" placeholder="Fecha*" name="fecha">
    </div>

    <div class="mb-3">
        <label for="idPersona" class="form-label">Persona: </label>
        <select class="form-control" name="idPersona" id="idPersona" required>
        <option disabled>Seleccione</option>
        </select>
    </div>
    <center>

        <button type="button" onclick="insertar_compra()" class="btn btn-danger">Insertar</button>
        <!-- <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button> -->
    </center>
    </form>
</div>

<script>listar_productos();</script>
<script>listar_personas();</script>

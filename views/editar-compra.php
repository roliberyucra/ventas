<div id="form-control">
    <form action="" id="formUpdateCompra">
        <center><h3><b>Formulario de actualizacion de compra</b></h3></center>
        <input type="hidden" class="form-control" id="id_compra" name="id_compra" required>
    <div class="mb-3">
        <label for="idProducto" class="form-label">Producto: </label>
        <input class="form-control" name="idProducto" id="idProducto" required>
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
        <input class="form-control" name="idPersona" id="idPersona" required>
    </div>
    <center>

        <button type="button" onclick="actualizar_compra()" class="btn btn-danger">Insertar</button>
        <a href="<?php echo BASE_URL; ?>/view-compra-admin" type="reset" class="btn btn-dark">Cancelar</a>
    </center>
    </form>
</div>

<script>listar();</script>
<script>
    const id_com = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1'];
                    ?>;
    ver_compra(id_com);
</script>

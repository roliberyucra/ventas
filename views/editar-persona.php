<div id="form-control">
    <form action="" id="formUpdatePersona">
        <center><h3><b>Formulario de actualizacion de personas</b></h3></center>
        <input type="hidden" class="form-control" id="id_persona" name="id_persona" required>
    <div class="mb-3">
        <label for="nroIdentidad" class="form-label">Nro. de Identidad: </label>
        <input type="text" class="form-control" id="nroIdentidad" placeholder="Nro de identidad*" name="nroIdentidad" disabled>
    </div>

    <div class="mb-3">
        <label for="razonSocial" class="form-label">Razón social: </label>
        <input type="text" class="form-control" id="razonSocial" placeholder="Razón social*" name="razonSocial">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono: </label>
        <input type="number" class="form-control" id="telefono" placeholder="Telefono*" name="telefono">
    </div>

    <div class="mb-3">
        <label for="departamento" class="form-label">Departamento: </label>
        <input type="text" class="form-control" id="departamento" placeholder="Departamento*" name="departamento">
    </div>

    <div class="mb-3">
        <label for="provincia" class="form-label">Provincia: </label>
        <input type="text" class="form-control" id="provincia" placeholder="Provincia*" name="provincia">
    </div>

    <div class="mb-3">
        <label for="distrito" class="form-label">Distrito: </label>
        <input type="text" class="form-control" id="distrito" placeholder="Distrito*" name="distrito">
    </div>

    <div class="mb-3">
        <label for="codPostal" class="form-label">Código postal: </label>
        <input type="number" class="form-control" id="codPostal" max="99999" placeholder="Codigo Postal*" name="codPostal">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección: </label>
        <input type="text" class="form-control" id="direccion" placeholder="Dirección*" name="direccion">
    </div>

    <div class="mb-3">
        <label for="rol" class="form-label">Rol: </label>
        <input type="text" class="form-control" id="rol" placeholder="Rol*" name="rol">
    </div>

    <div class="mb-3">
        <label for="correo" class="form-label">Correo: </label>
        <input type="email" class="form-control" id="correo" placeholder="Correo*" name="correo">
    </div>

    <center>
        <button type="button" onclick="actualizar_persona()" class="btn btn-danger">Actualizar</button>
        <a href="<?php echo BASE_URL; ?>/view-persona-admin" type="reset" class="btn btn-dark">Cancelar</a>
    </center>
    </form>
</div>

<script>listar_personas_admin();</script>
<script>
    const id_per = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1'];
                    ?>;
    ver_persona(id_per);
</script>
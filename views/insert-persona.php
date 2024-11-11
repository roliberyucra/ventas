<div id="form-control">
    <form action="" id="formInsertPersona">
        <center><h3><b>Formulario de registro de personas</b></h3></center>
    <div class="mb-3">
        <label for="nroIdentidad" class="form-label">Nro. de Identidad: </label>
        <input type="text" class="form-control" id="nroIdentidad" placeholder="Nro de identidad*" name="nroIdentidad">
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

    <div class="mb-3">
        <label for="contraseña" class="form-label">Contraseña: </label>
        <input type="password" class="form-control" id="contraseña" placeholder="Contraseña*" name="contraseña">
    </div>

    <div class="mb-3">
        <label for="estado" class="form-label">Estado: </label>
        <input type="number" class="form-control" id="estado" min="0" max="1" placeholder="Estado*" name="estado">
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de registro: </label>
        <input type="date" class="form-control" id="fecha" placeholder="Fecha de registro*" name="fecha">
    </div>
    <center>
        <button type="button" onclick="insertar_persona()" class="btn btn-danger">Insertar</button>
        <!-- <button type="submit" class="btn btn-danger">Registrar</button>
        <button type="reset" class="btn btn-dark">Cancelar</button> -->
    </center>
    </form>
</div>
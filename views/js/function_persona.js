async function listar_personas() {
    try {
        let respuesta = await fetch(base_url + '/controller/Persona.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="" disabled selected>Seleccione</option>'; // Sin jquery
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>'; // Sin jquery

                // Para trabajar con jquery
                /*$('#idCategoria').append($('<option />', {
                    text: `${element.nombre}` ,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('idPersona').innerHTML = contenido_select; // Sin jquery
        }
        console.log(respuesta);
    }catch(e){
        console.log("Error al cargar categorias." + e);
    }
}

async function listar_personas_admin() {
    try {
        let respuesta = await fetch(base_url + '/controller/Persona.php?tipo=listarAdmin');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                // "nueva_fila.id" = id de la nueva fila, "item.id" = id de la base de datos(producto)
                nueva_fila.id = "fila" + item.id;
                // Sumar 1 al contador
                /* cont+=1; */
                cont++;
                // los items.xx vienen De la Base de datos
                nueva_fila.innerHTML = `
                    <th>${cont}</th>
                    <td>${item.nro_identidad}</td>
                    <td>${item.razon_social}</td>
                    <td>${item.telefono}</td>
                    <td>${item.correo}</td>
                    <td>${item.cod_postal}</td>
                    <td>${item.direccion}</td>
                    <td>${item.rol}</td>
                    <td>${item.nro_identidad}</td>
                    <td></td>
                `;
                document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (e) {
        console.log("Ups, ocurrió un error " + e);
    }
}

// Verificar si hay una tabla o un contenedor con el id tbl_persona en la página.
// Si existe, se ejecuta una función listar_personas_admin() responsable de mostrar o listar datos de personas
if (document.querySelector('#tbl_persona')) {
    listar_personas_admin();
}

async function insertar_persona() {
    let nroIdentidad = document.getElementById('nroIdentidad').value;
    let razonSocial = document.querySelector('#razonSocial').value;
    let telefono = document.querySelector('#telefono').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codPostal = document.querySelector('#codPostal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let correo = document.querySelector('#correo').value;
    let contraseña = document.querySelector('#nroIdentidad').value;
    
    if (nroIdentidad == "" || razonSocial == "" || telefono == "" || departamento == "" || provincia == "" || distrito == "" || codPostal == "" || direccion == "" || rol == "" || correo == "" || contraseña == "") {
        alert("Error, campos vacíos");
        return;
    }

// Mostrar error en caso de codigo roto
    try {
        // Capturar los datos del formulario y guardarlos en la constante "datos"
        const datos = new FormData(formInsertPersona);
        // Enviar datos hacia el controlador
        // await = promesa
        let respuesta = await fetch(base_url + '/controller/Persona.php?tipo=registrar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Ups, ocurrió un error" + e);
    }
}
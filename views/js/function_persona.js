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
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let nueva_fila = document.createElement("tr");
                //id de la fila      id de la base de datos.
                nueva_fila.id = "fila" + item.id;
                cont++;
                //lo que va al lado del item. deben ser los campos de la base de datos
                nueva_fila.innerHTML = `
                        <th>${cont}</th>
                        <td>${item.nro_identidad}</td>
                        <td>${item.razon_social}</td>
                        <td>${item.telefono}</td>
                        <td>${item.correo}</td>
                        <td>${item.cod_postal}</td>
                        <td>${item.direccion}</td>
                        <td>${item.rol}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_persona').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar personas" + error);
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

async function ver_persona(id){
    const formData= new FormData();
    //agregale un hijo   creale un nombre y pasale el id
    formData.append('id_persona',id);
    try {
        //respndemos e indicamos hacia donde queremos enviar
        let respuesta = await fetch(base_url+'/controller/Persona.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nroIdentidad').value = json.contenido.nro_identidad;
            document.querySelector('#razonSocial').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#codPostal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
            document.querySelector('#correo').value = json.contenido.correo;
        }else{
            window.location = base_url + "view-persona-admin";
        }
        console.log(json);
    } catch (error) {
        console.log("Oops, ocurrió un error "+ error);
    }
}

async function actualizar_persona() {
    const datos = new FormData(formUpdatePersona);
    try {
        let respuesta = await fetch(base_url+'/controller/Persona.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success")
        } else {
            swal("Registro", json.mensaje, "error")
        }
        console.log(json);
    } catch (e) {
        console.log("Ups, ocurrió un error " + e);
        swal("Error", "Hubo un problema al actualizar la persona. Intenta nuevamente.", "error");
    }
}
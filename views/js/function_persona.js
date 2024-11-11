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
    let contraseña = document.querySelector('#contraseña').value;
    let estado = document.querySelector('#estado').value;
    let fecha = document.querySelector('#fecha').value;
    
    if (nroIdentidad == "" || razonSocial == "" || telefono == "" || departamento == "" || provincia == "" || distrito == "" || codPostal == "" || direccion == "" || rol == "" || correo == "" || contraseña == "" || estado == "" || fecha == "") {
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
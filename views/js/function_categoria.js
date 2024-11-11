async function insertar_categoria() {
    let nombre = document.getElementById('nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if (nombre == "" || detalle == "") {
        alert("Error, campos vacíos");
        return;
    }

// Mostrar error en caso de codigo roto
    try {
        // Capturar los datos del formulario y guardarlos en la constante "datos"
        const datos = new FormData(formInsertCategoria);
        // Enviar datos hacia el controlador
        // await = promesa
        let respuesta = await fetch(base_url + '/controller/Categoria.php?tipo=registrar',{
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

async function listar_categorias() {
    try {
        let respuesta = await fetch(base_url + '/controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="" disabled selected>Seleccione</option>'; // Sin jquery
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>'; // Sin jquery

                // Para trabajar con jquery
                /*$('#idCategoria').append($('<option />', {
                    text: `${element.nombre}` ,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('idCategoria').innerHTML = contenido_select; // Sin jquery
        }
        console.log(respuesta);
    }catch(e){
        console.log("Error al cargar categorias." + e);
    }
}
async function insertar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let idCategoria = document.querySelector('#idCategoria').value;
    let fechaVencimiento = document.querySelector('#fechaVencimiento').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let imagen2 = document.querySelector('#imagen2').value;
    let imagen3 = document.querySelector('#imagen3').value;
    let imagen4 = document.querySelector('#imagen4').value;
    let idProveedor = document.querySelector('#idProveedor').value;
    
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || fechaVencimiento == "" || idCategoria == "" || imagen1 == "" || imagen2 == "" || imagen3 == "" || imagen4 == "" || idProveedor == "") {
        alert("Error, campos vacíos");
        return;
    }

// Mostrar error en caso de codigo roto
    try {
        // Capturar los datos del formulario y guardarlos en la constante "datos"
        const datos = new FormData(formInsertProducto);
        // Enviar datos hacia el controlador
        // await = promesa
        let respuesta = await fetch(base_url + '/controller/Producto.php?tipo=registrar',{
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

async function listar_proveedores() {
    try {
        let respuesta = await fetch(base_url + '/controller/Proveedor.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="" disabled selected>Seleccione</option>'; // Sin jquery
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>'; // Sin jquery

                // Para trabajar con jquery
                /*$('#idProveedor').append($('<option />', {
                    text: `${element.razon_social}` ,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('idProveedor').innerHTML = contenido_select; // Sin jquery
        }
        console.log(respuesta);
    }catch(e){
        console.log("Error al cargar proveedores." + e);
    }
}

async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + '/controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="" disabled selected>Seleccione</option>'; // Sin jquery
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>'; // Sin jquery

                // Para trabajar con jquery
                /*$('#idProveedor').append($('<option />', {
                    text: `${element.razon_social}` ,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('idProducto').innerHTML = contenido_select; // Sin jquery
        }
        console.log(respuesta);
    }catch(e){
        console.log("Error al cargar productos." + e);
    }
}
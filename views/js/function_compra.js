async function insertar_compra() {
    let idProducto = document.getElementById('idProducto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let fecha = document.querySelector('#fecha').value;
    let idPersona = document.querySelector('#idPersona').value;
    
    if (idProducto == "" || cantidad == "" || precio == "" || fecha == "" || idPersona == "") {
        alert("Error, campos vacíos");
        return;
    }

// Mostrar error en caso de codigo roto
    try {
        // Capturar los datos del formulario y guardarlos en la constante "datos"
        const datos = new FormData(formInsertCompra);
        // Enviar datos hacia el controlador
        // await = promesa
        let respuesta = await fetch(base_url + '/controller/Compra.php?tipo=registrar',{
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

async function listar() {
    try {
        let respuesta = await fetch(base_url + '/controller/Compra.php?tipo=listar');
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
                        <td>${item.producto.nombre}</td>
                        <td>${item.cantidad}</td>
                        <td>${item.precio}</td>
                        <td>${item.fecha_compra}</td>
                        <td>${item.persona.razon_social}</td>
                        <td>${item.options}</td>
                `; document.querySelector('#tbl_compra').appendChild(nueva_fila)
            });
        }

    } catch (error) {
        console.log("Error al cargar las compras" + error);
    }
}
if (document.querySelector('#tbl_compra')) {
    listar();
}

async function ver_compra(id) {
    const formData = new FormData();
    formData.append('id_compra', id);
    try {
        let respuesta = await fetch(base_url + '/controller/Compra.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_compra').value = json.contenido.id;
            document.querySelector('#idProducto').value = json.contenido.id_producto;
            document.querySelector('#cantidad').value = json.contenido.cantidad;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#fecha').value = json.contenido.fecha_compra;
            document.querySelector('#idPersona').value = json.contenido.id_persona;
        }else{
            window.location = base_url + "/view-compra-admin";
        }
        console.log(json);
    } catch (e) {
        console.log('Ups, ocurrió un error ' + e);
    }
}

async function actualizar_compra() {
    const datos = new FormData(formUpdateCompra);
    try {
        let respuesta = await fetch(base_url + '/controller/Compra.php?tipo=actualizar', {
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

    }
}
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
                    <td>${item.producto.nombre}</td>
                    <td>${item.cantidad}</td>
                    <td>${item.precio}</td>
                    <td>${item.fecha_compra}</td>
                    <td>${item.persona.razon_social}</td>
                    <td>${item.codigo}</td>
                    <td></td>
                `;
                document.querySelector('#tbl_compra').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (e) {
        console.log("Ups, ocurrió un error " + e);
    }
}

// Verificar si hay una tabla o un contenedor con el id tbl_compra en la página.
// Si existe, se ejecuta una función listar() responsable de mostrar o listar datos de compras
if (document.querySelector('#tbl_compra')) {
    listar();
}
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
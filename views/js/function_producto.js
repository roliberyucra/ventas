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
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar',{
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
/*
async function listar_categorias() {
    try{
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
    }catch(e){
        console.log("Error al cargar categorias." + e);
    }
}*/
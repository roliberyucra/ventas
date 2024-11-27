async function iniciar_sesion() {
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#usuario');
    if (usuario ==  "" || password == "") {
        alert('Campos vacíos');
        return;
    }

    try {
        // Capturar los datos del formulario y guardarlos en la constante "datos"
        const datos = new FormData(form_iniciar_sesion);
        // Enviar datos hacia el controlador
        // await = promesa
        let respuesta = await fetch(base_url + '/controller/Login.php?tipo=iniciar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            //swal("Iniciar sesion", json.mensaje, "success");
            location.replace(base_url + '/producto');
        }else{
            swal("Iniciar sesion", json.mensaje, 'error');
        }

        console.log(json);
    } catch (e) {
        console.log("Ups, ocurrió un error" + e);
    }
}

if (document.querySelector('#form_iniciar_sesion')) {
    let form_iniciar_sesion = document.querySelector('#form_iniciar_sesion');
    form_iniciar_sesion.onsubmit = function (e) {
        e.preventDefault();
        iniciar_sesion();
    }
}

async function cerrar_sesion() {
    try {
        let respuesta = await fetch(base_url + '/controller/Login.php?tipo=cerrar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
           
        });
        json = await respuesta.json();
        if (json.status) {
            location.replace(base_url + '/login');
        }
    } catch (error) {
        console.log("Ups, ocurrió un error" + error);
    }
}
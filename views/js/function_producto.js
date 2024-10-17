async function insertar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let fechaVencimiento = document.querySelector('#fechaVencimiento').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let imagen2 = document.querySelector('#imagen2').value;
    let imagen3 = document.querySelector('#imagen3').value;
    let imagen4 = document.querySelector('#imagen4').value;
    let idCategoria = document.querySelector('#idCategoria').value;
    let idProveedor = document.querySelector('#idProveedor').value;
    
    if (codigo == "" || nombre == "" || detalle == "" || precio == "" || stock == "" || imagen1 == "" || imagen2 == "" || imagen3 == "" || imagen4 == "" || idCategoria == "" || idProveedor == "") {
        alert("Error, campos vacíos");
        return;
    }
}
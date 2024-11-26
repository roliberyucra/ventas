<?php
require_once('../model/compraModel.php');
require_once('../model/personaModel.php');
require_once('../model/productoModel.php');

$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objCompra = new compraModel();
$objProducto = new productoModel();
$objPersona = new personaModel();


if ($tipo == 'registrar') {

    if ($_POST) {
        $idProducto = $_POST['idProducto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $fecha = $_POST['fecha'];
        $idPersona = $_POST['idPersona'];
        if ($idProducto == "" || $cantidad == "" || $precio == "" || $fecha == "" || $idPersona == "") {
            // respuesta
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else{
            // Aqui se guardará la respuesta del modelo
            $arrCompra = $objCompra->registrarCompra(
                $idProducto, $cantidad, $precio, $fecha, $idPersona);

            if ($arrCompra->id>0) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso.');

            }else{
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error al registrar producto.');
            }
            echo json_encode($arr_Respuesta);
        }

    }
}

if ($tipo == 'listar') {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Compras = $objCompra->obtener_compras();
    if (!empty($arr_Compras)) {
        // Recorremos el array para agregar las opciones den las categorias
        for ($i=0; $i < count($arr_Compras); $i++) {
            $id_producto = $arr_Compras[$i]->id_producto;
            $r_producto = $objProducto->obtener_producto_id($id_producto);
            $arr_Compras[$i]->producto=$r_producto;

            $id_persona = $arr_Compras[$i]->id_persona;
            $r_persona = $objPersona->obtener_persona($id_persona);
            $arr_Compras[$i]->persona=$r_persona;

            $idCompra = $arr_Compras[$i]->id;
            /* $producto = $arr_Compras[$i]->nombre; */
            $opciones = '';
            $arr_Compras[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Compras;
    }

    echo json_encode($arr_Respuesta);
}


?>
<?php
require_once('../model/compraModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objCompra = new compraModel();


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


?>
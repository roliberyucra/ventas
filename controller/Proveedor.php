<?php
require_once('../model/proveedorModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase proveedor model
$objProveedor = new proveedorModel();

if ($tipo == 'listar') {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Proveedores = $objProveedor->obtener_proveedores();
    if (!empty($arr_Proveedores)) {
        // Recorremos el array para agregar las opciones den las proveedores
        for ($i=0; $i < count($arr_Proveedores); $i++) { 
            $idProveedor = $arr_Proveedores[$i]->id;
            $proveedor = $arr_Proveedores[$i]->razon_social;
            $opciones = '';
            $arr_Proveedores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedores;
    }

    echo json_encode($arr_Respuesta);
}

?>
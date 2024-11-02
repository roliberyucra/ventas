<?php
require_once('../model/categoriaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objCategoria = new categoriaModel();

if ($tipo == 'listar') {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        // Recorremos el array para agregar las opciones den las categorias
        for ($i=0; $i < count($arr_Categorias); $i++) { 
            $idCategoria = $arr_Categorias[$i]->id;
            $categoria = $arr_Categorias[$i]->nombre;
            $opciones = '';
            $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Categorias;
    }

    echo json_encode($arr_Respuesta);
}

?>
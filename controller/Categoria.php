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

if ($tipo == 'registrar') {

    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        if ($nombre == "" || $detalle == "") {
            // respuesta
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else{
            // Aqui se guardará la respuesta del modelo
            $arrCategoria = $objCategoria->registrarCategoria(
                $nombre, $detalle);

            if ($arrCategoria->id>0) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso.');

            }else{
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error al registrar producto.');
            }
            echo json_encode($arr_Respuesta);
        }

    }
}


?>
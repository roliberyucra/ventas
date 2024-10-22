<?php
    require_once('./model/productoModel.php');
    $tipo = $_REQUEST['tipo'];

    if ($tipo == 'Registrar') {
        print_r($_POST);
        if ($_POST) {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $imagen1 = $_POST['imagen1'];
            $imagen2 = $_POST['imagen2'];
            $imagen3 = $_POST['imagen3'];
            $imagen4 = $_POST['imagen4'];
            $idCategoria = $_POST['idCategoria'];
            $idProveedor = $_POST['idProveedor'];
            if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $imagen1 == "" || $imagen2 == "" || $imagen3 == "" || $imagen4 == "" || $idCategoria == "" || $idProveedor == "") {
                $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
            }else{
                # code ...
            }

        }
    }

?>
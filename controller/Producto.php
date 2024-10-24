<?php
    require_once('../model/productoModel.php');
    $tipo = $_REQUEST['tipo'];

    // Intanciar la clase modeloproducto
    $objProducto = new ProductoModel();

    if ($tipo == 'registrar') {
        //print_r($_POST);
        if ($_POST) {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $idCategoria = $_POST['idCategoria'];
            $fechaVencimiento = $_POST['fechaVencimiento'];
            $imagen1 = $_POST['imagen1'];
            $imagen2 = $_POST['imagen2'];
            $imagen3 = $_POST['imagen3'];
            $imagen4 = $_POST['imagen4'];
            $idProveedor = $_POST['idProveedor'];
            if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $idCategoria == "" || $fechaVencimiento == "" || $imagen1 == "" || $imagen2 == "" || $imagen3 == "" || $imagen4 == "" || $idProveedor == "") {
                // respuesta
                $arr_respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
            }else{
                // Aqui se guardará la respuesta del modelo
                $arrProducto = $objProducto->registrarProducto(
                    $codigo, $nombre, $detalle, $precio, $stock, $idCategoria , $fechaVencimiento, $imagen1, $imagen2, $imagen3, $imagen4, $idCategoria, $idProveedor);

                if ($arrProducto->id>0) {
                    $arr_respuesta = array('status'=>true,'mensaje'=>'Registro exitoso.');
                }else{
                    $arr_respuesta = array('status'=>false,'mensaje'=>'Error al registrar producto.');
                }
                echo json_encode($arr_respuesta);
            }

        }
    }

?>
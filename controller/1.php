<?
    if ($tipo == 'actualizar') {
        $id_producto = $_POST['id_producto'];
        $img = $_POST['img'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $idCategoria = $_POST['idCategoria'];
        $fechaVencimiento = $_POST['fechaVencimiento'];
        $idProveedor = $_POST['idProveedor'];
        if ($nombre == "" || $detalle == "" || $precio == "" || $idCategoria == "" || $fechaVencimiento == "" || $idProveedor == "") {
            // respuesta
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else{
            // Aqui se guardará la respuesta del modelo
            $arrProducto = $objProducto->actualizarProducto(
                $id_producto, $nombre, $detalle, $precio, $idCategoria , $fechaVencimiento, $idProveedor);

            if ($arrProducto->p_id > 0) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Actulizado correctamente.');

                if (move_uploaded_file($archivo, $destino . '' . $id_producto . '' . $nombre)) {
                }
            }else{
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error al registrar producto.');
            }
            echo json_encode($arr_Respuesta);
        }
    }
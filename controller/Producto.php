<?php
    require_once('../model/productoModel.php');
    $tipo = $_REQUEST['tipo'];

    // Intanciar la clase modeloproducto
    $objProducto = new ProductoModel();

    if ($tipo == 'registrar') {
        //print_r($_POST);
        //echo $_FILES['imagen1']['name'];
        /* echo $_FILES['imagen2']['name'];
        echo $_FILES['imagen3']['name'];
        echo $_FILES['imagen4']['name']; */

        if ($_POST) {
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $detalle = $_POST['detalle'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $idCategoria = $_POST['idCategoria'];
            $fechaVencimiento = $_POST['fechaVencimiento'];
            /* $imagen1 = $_POST['imagen1']; */
            $imagen1 = 'imagen1';
            $idProveedor = $_POST['idProveedor'];
            if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $idCategoria == "" || $fechaVencimiento == "" || $imagen1 == "" || $idProveedor == "") {
                // respuesta
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
            }else{
                // Aqui se guardará la respuesta del modelo
                $arrProducto = $objProducto->registrarProducto(
                    $codigo, $nombre, $detalle, $precio, $stock, $idCategoria , $fechaVencimiento, $imagen1, $idCategoria, $idProveedor);

                if ($arrProducto->id>0) {
                    $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso.');
                    $archivo = $_FILES['imagen1']['tmp_name'];
                    $destino = './assets/img_productos/';
                    $tipoArchivo = strtolower(pathinfo($_FILES["imagen1"]["name"], PATHINFO_EXTENSION));

                    $nombre = $arrProducto->id."".$tipoArchivo;

                    if (move_uploaded_file($archivo,$destino.$nombre)) {
                        $arr_imagen = $objProducto->actualizar_imagen($id,$nombre);
                    }else {
                        $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso, error al subir imagen.');
                    }

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
        $arr_Productos = $objProducto->obtener_productos();
        if (!empty($arr_Productos)) {
            // Recorremos el array para agregar las opciones den las categorias
            for ($i=0; $i < count($arr_Productos); $i++) {
                $idCategoria = $arr_Productos[$i]->id;
                $categoria = $arr_Productos[$i]->nombre;
                $opciones = '';
                $arr_Productos[$i]->options = $opciones;
            }
            $arr_Respuesta['status'] = true;
            $arr_Respuesta['contenido'] = $arr_Productos;
        }
    
        echo json_encode($arr_Respuesta);
    }

?>
<?php
    require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $idCategoria, $fechaVencimiento, $imagen1, $imagen2, $imagen3, $imagen4, $idProveedor){
        // Orden de la base de datos
        $sql = $this->conexion->query("CALL registrar_producto('{$codigo}', '{$nombre}', '{$detalle}', '{$precio}', '{$stock}', '{$idCategoria}', '{$fechaVencimiento}', '{$imagen1}', '{$imagen2}', '{$imagen3}', '{$imagen4}', '{$idProveedor}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizar_imagen($id, $imagen1){
        $sql = $this->conexion->query("UPDATE producto SET imagen1 = '{$imagen1}' WHERE id = '{$id}'");
        return 1;
    }

    public function obtener_productos(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
}

?>
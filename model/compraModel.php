<?php
    require_once "../librerias/conexion.php";
class CompraModel{

    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarCompra($idProducto, $cantidad, $precio, $fecha, $idPersona){
        // Orden de la base de datos
        $sql = $this->conexion->query("CALL registrar_compra('{$idProducto}', '{$cantidad}', '{$precio}', '{$fecha}', '{$idPersona}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_compras(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM compras /* WHERE estado = 1 */");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function verCompra($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id = '{$id}'");
        //convertimos la respuesta en un objeto
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function actualizarCompra($id_compra, $id_producto, $cantidad, $precio, $fecha, $id_persona){
        $sql = $this->conexion->query("CALL actualizar_compra('{$id_compra}','{$id_producto}','{$cantidad}','{$precio}','{$fecha}','{$id_persona}')");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function eliminarCompra($id_compra){
        $sql = $this->conexion->query("CALL eliminar_compra('{$id_compra}')");
        return $sql;
    }
}


?>
<?php
    require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }

    public function registrarProducto($codigo, $nombre, $detalle, $precio, $stock, $imagen1, $imagen2, $imagen3, $imagen4, $idCategoria, $idProveedor){
        
    }
}

?>
<?php
    require_once "../librerias/conexion.php";
    class categoriaModel{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function obtener_categorias(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM categoria");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }
    }
?>
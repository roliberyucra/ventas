<?php
    require_once "../librerias/conexion.php";
    class personaModel{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function obtener_personas(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = '1' ");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }
    }
?>
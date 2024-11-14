<?php
    require_once "../librerias/conexion.php";
    class personaModel{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        // OBTENER CLIENTES
        // OBTENER CLIENTES
        public function obtener_personas(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'Cliente' ");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }

        public function registrarPersona($nroIdentidad, $razonSocial, $telefono, $departamento, $provincia, $distrito, $codPostal, $direccion, $rol, $correo, $contraseña){
            // Orden de la base de datos
            $sql = $this->conexion->query("CALL registrar_persona('{$nroIdentidad}', '{$razonSocial}', '{$telefono}', '{$departamento}', '{$provincia}', '{$distrito}', '{$codPostal}', '{$direccion}', '{$rol}', '{$correo}', '{$contraseña}')");
            $sql = $sql->fetch_object();
            return $sql;
        }

        //
        public function buscarPersonaPorDNI($password){
            $sql = $this->conexion->query("SELECT*FROM persona WHERE nro_identidad = '{$password}'");
            $sql = $sql->fetch_object();
            return $sql;
        }
    }

    class proveedorModel{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }
        // OBTENER PROVEEDORES
        // OBTENER PROVEEDORES
        public function obtener_proveedores(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'Proveedor' ");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }
    }
?>
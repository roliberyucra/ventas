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

        // Todas las personas
        public function obtener_personas(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'Cliente' ");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }

        public function obtener_personas_admin(){
            $arrRespuesta = array();
            $respuesta = $this->conexion->query("SELECT * FROM persona WHERE estado = 1");
            while ($objeto = $respuesta->fetch_object()) {
                array_push($arrRespuesta, $objeto);
            }
            return $arrRespuesta;
        }

        // Por ID
        public function obtener_persona($id){
            $respuesta = $this->conexion->query("SELECT * FROM  persona WHERE id = '{$id}'");
            $objeto = $respuesta->fetch_object();
            return $objeto;
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

        public function verPersona($id){
            $sql = $this->conexion->query("SELECT * FROM persona WHERE id = '{$id}'");
            //convertimos la respuesta en un objeto
            $sql = $sql->fetch_object();
            return $sql;
        }
    
        public function actualizarPersona($id_persona, $razonSocial, $telefono, $departamento, $provincia, $distrito,$codPostal,$direccion,$rol,$correo){
            $sql = $this->conexion->query("CALL actualizar_persona('{$id_persona}','{$razonSocial}','{$telefono}','{$departamento}','{$provincia}','{$distrito}','{$codPostal}','{$direccion}','{$rol}','{$correo}')");
            $sql = $sql->fetch_object();
            return $sql;
        }

        public function eliminarPersona($id_persona){
            $sql = $this->conexion->query("CALL eliminar_persona('{$id_persona}')");
            /* $sql = $sql->fetch_object(); */
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
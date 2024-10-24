<?php
    require_once "../config/config.php";

    class Conexion{
        public static function connect(){
           // $mysql = new mysqli(BD_HOST, BD_NAME, BD_USER, BD_PASSWORD);
           $mysql = new mysqli(BD_HOST, BD_USER, BD_PASSWORD, BD_NAME);
           $mysql->set_charset(BD_CHARSET);
           if (mysqli_connect_errno()) {
                echo "Error de conexión: ".mysqli_connect_errno();
           }
           return $mysql;
        }

    }

?>
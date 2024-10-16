<?php

$usuario = "importec_roliber_ventas";
$password = "Zcmyl04l#)Hu";
$servidor = "localhost";
$basededatos = "importec_roliber_ventas";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

?>
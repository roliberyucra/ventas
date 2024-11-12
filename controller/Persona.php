<?php
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];

//instanciar la clase categoria model
$objPersona = new personaModel();

if ($tipo == 'listar') {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Personas = $objPersona->obtener_personas();
    if (!empty($arr_Personas)) {
        // Recorremos el array para agregar las opciones den las categorias
        for ($i=0; $i < count($arr_Personas); $i++) {
            $idPersona = $arr_Personas[$i]->id;
            $persona = $arr_Personas[$i]->razon_social;
            $opciones = '';
            $arr_Personas[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Personas;
    }

    echo json_encode($arr_Respuesta);
}

$objProveedor = new proveedorModel();

if ($tipo == 'listar') {
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Proveedores = $objProveedor->obtener_proveedores();
    if (!empty($arr_Proveedores)) {
        // Recorremos el array para agregar las opciones den las proveedores
        for ($i=0; $i < count($arr_Proveedores); $i++) { 
            $idProveedor = $arr_Proveedores[$i]->id;
            $proveedor = $arr_Proveedores[$i]->razon_social;
            $opciones = '';
            $arr_Proveedores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedores;
    }

    echo json_encode($arr_Respuesta);
}

// Registrar PERSONA
if ($tipo == 'registrar') {

    if ($_POST) {
        $nroIdentidad = $_POST['nroIdentidad'];
        $razonSocial = $_POST['razonSocial'];
        $telefono = $_POST['telefono'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codPostal = $_POST['codPostal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $estado = $_POST['estado'];
        $fecha = $_POST['fecha'];
        if ($nroIdentidad == "" || $razonSocial == "" || $telefono == "" || $departamento == "" || $provincia == "" || $distrito == "" || $codPostal == "" || $direccion == "" || $rol == "" || $correo == "" || $contraseña == "" || $estado == "" || $fecha == "") {
            // respuesta
            $arr_Respuesta = array('status'=>false,'mensaje'=>'Error, campos vacíos');
        }else{
            // Aqui se guardará la respuesta del modelo
            $arrPersona = $objPersona->registrarPersona(
                $nroIdentidad, $razonSocial, $telefono, $departamento, $provincia, $distrito, $codPostal, $direccion, $rol, $correo, $contraseña, $estado, $fecha);

            if ($arrCompra->id>0) {
                $arr_Respuesta = array('status'=>true,'mensaje'=>'Registro exitoso.');

            }else{
                $arr_Respuesta = array('status'=>false,'mensaje'=>'Error al registrar producto.');
            }
            echo json_encode($arr_Respuesta);
        }

    }
}

?>
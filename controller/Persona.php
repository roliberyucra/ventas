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

if ($tipo == 'listarAdmin') {
    //respuesta
    //respuesta
    $arr_Respuesta = array('status'=>false, 'contenido'=>'');
    $arr_Personas = $objPersona->obtener_personas_admin();
    if (!empty($arr_Personas)) {
        // Recorremos el array para agregar las opciones de las personas
        for ($i=0; $i < count($arr_Personas); $i++) {
            $idPersona = $arr_Personas[$i]->id;
            $persona = $arr_Personas[$i]->razon_social;
            $opciones = '<a href="'.BASE_URL.'/editar-persona/'.$idPersona.'"><i class="fas fa-edit"></i>Editar</a>    <button onclick="eliminar_persona('.$idPersona.');">Eliminar</button>';
            $arr_Personas[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Personas;
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
        $contraseña = $_POST['nroIdentidad'];

        // Validación de campos vacíos
        if ($nroIdentidad == "" || $razonSocial == "" || $telefono == "" || $departamento == "" || $provincia == "" || $distrito == "" || $codPostal == "" || $direccion == "" || $rol == "" || $correo == "" || $contraseña == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            // Hashear la contraseña
            //$contraseñaHasheada = md5($contraseña);

            // Hashear Forma Anibal
            $contraseñaHasheada = password_hash($contraseña, PASSWORD_DEFAULT);

            // Guardar los datos en la base de datos, incluyendo la contraseña hasheada
            $arrPersona = $objPersona->registrarPersona(
                $nroIdentidad, $razonSocial, $telefono, $departamento, $provincia, $distrito, $codPostal, $direccion, $rol, $correo, $contraseñaHasheada);

            if ($arrPersona->id > 0) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro exitoso.');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar persona.');
            }

            // Enviar la respuesta como JSON
            echo json_encode($arr_Respuesta);
        }
    }
}

if($tipo == 'ver'){
    //ver si está llegando información, prueba. 
    //print_r($_POST);
    $id_persona = $_POST['id_persona'];
    //funcion flecha llamamos a una funcion
    $arr_Respuesta = $objPersona->verPersona($id_persona);
    /* print_r($arr_Respuesta); */
    //si tenemos respuesta
    if (empty($arr_Respuesta)) {
        $response = array('status'=>false, 'mensaje'=>"Error, no hay información");
    }else{
        $response = array('status'=>true, 'mensaje'=>"Datos encontrados", 'contenido'=>$arr_Respuesta);
    }
    echo json_encode($response);

}

if ($tipo == "actualizar") {
    $id_persona = $_POST['id_persona'];
    $razonSocial = $_POST['razonSocial'];
    $telefono = $_POST['telefono'];
    $departamento = $_POST['departamento'];
    $provincia = $_POST['provincia'];
    $distrito = $_POST['distrito'];
    $codPostal = $_POST['codPostal'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    if ($id_persona == "" || $razonSocial == "" || $telefono == "" || $departamento == "" || $provincia == ""|| $distrito == ""|| $codPostal == ""|| $direccion == ""|| $rol == ""|| $correo == "") {
        $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
    } else {
        $arrPersona = $objPersona->actualizarPersona($id_persona, $razonSocial, $telefono, $departamento, $provincia, $distrito,$codPostal,$direccion,$rol,$correo);
        if ($arrPersona->p_id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualizado Correctamente');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar persona');
        }
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "eliminar") {
    //ver si está llegando información, prueba. 
   //print_r($_POST);
   $id_persona = $_POST['id_persona'];
   //funcion flecha llamamos a una funcion
   $arr_Respuesta = $objPersona->eliminarPersona($id_persona);
   /* print_r($arr_Respuesta); */
   //si tenemos respuesta
   if (empty($arr_Respuesta)) {
       $response = array('status' => false);
   } else {
       $response = array('status' => true);
   }
   echo json_encode($response);
}


?>
<?php

use LDAP\Result;

require_once (__DIR__.'/../Models/registroModel.php');

class registroController{

    public $obj;
    public $dato;

    function __construct(){
        $this->obj = new registroModel;
    }

    public function registro(){
        
        $apellidos = (isset($_REQUEST['apellidos'])) ? $_REQUEST['apellidos'] : ''; 
        $nombres = (isset($_REQUEST['nombres'])) ? $_REQUEST['nombres'] : ''; 
        $username = (isset($_REQUEST['nombre_user'])) ? $_REQUEST['nombre_user'] : ''; 
        $email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : ''; 
        $pass = (isset($_REQUEST['pass'])) ? $_REQUEST['pass'] : ''; 
        $pass_conf = (isset($_REQUEST['pass_conf'])) ? $_REQUEST['pass_conf'] : ''; 
        $fecha_hoy = date('Y-m-d');
        
        $msg = "Complete el formulario para terminar con su registro";
        $result = 1;
        
        if (!strlen($apellidos)) {
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif (!strlen($nombres)){
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif (!strlen($username)){
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif (!strlen($email)){
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif (!strlen($pass)){
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif (strlen($pass) < 8) {
            $msg = "La contraseña debe tener al menos 8 caracteres";
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } elseif ($pass == $pass_conf) {
            $data = $this->obj->agregar($apellidos, $nombres, $username, $email, $pass, $fecha_hoy);
            if ($data == 1) {
                $msg = "El correo ". $email ." ya se encuntra registrado intente con otro";
                $result = -1;
                $a_data = array('result' => $result, 'msg' => $msg);
                return $a_data;    
            } else {
                return $data;
            }
        } else {
            $msg = "ups la constraseña no coincide";
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        }
       




    }

    /* public function holis(){
        echo "Soy la funcion mainBuscar del controller main <br>";
    }

    public function saludo(){
        echo "funcion con parametros <br>";
    } */

    /* function agregar(){
        $apellidos = (isset($_REQUEST['apellidos'])) ? $_REQUEST['apellidos'] : ''; 
        $nombres = (isset($_REQUEST['nombres'])) ? $_REQUEST['nombres'] : ''; 
        $username = (isset($_REQUEST['nombre_user'])) ? $_REQUEST['nombre_user'] : ''; 
        $email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : ''; 
        $pass = (isset($_REQUEST['pass'])) ? $_REQUEST['pass'] : ''; 
        $fecha_hoy = date('Y-m-d');

        $data = $this->obj->agregar($apellidos, $nombres, $username, $email, $pass, $fecha_hoy);
        //return $data;
        if ($data) {
            $data = 'Se han guardado los datos';
            return $data;
        } else {
            $data = 'Error al guardar los datos';  
            return $data;
        }
    } */



}

?>
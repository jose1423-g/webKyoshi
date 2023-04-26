<?php 

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

        if ($pass == $pass_conf) { 
            $data = $this->obj->agregar($apellidos, $nombres, $username, $email, $pass, $fecha_hoy);
            if ($data) {
                $data = 'Se han guardado los datos';
                return $data;
            } else {
                $data = 'Error al guardar los datos';  
                return $data;
            }
        } else {
            
            $data = "verifique las password no son iguales";
            return $data; 
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
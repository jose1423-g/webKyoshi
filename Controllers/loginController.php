<?php 

require_once (__DIR__.'/../Models/loginmodel.php');


class loginController{

    public $obj;
    public $dato;

    function __construct(){
        $this->obj = new loginModel;
    }

    public function login(){
    }

    public function holis(){
        echo "Soy la funcion mainBuscar del controller main <br>";
    }

    public function saludo(){
        echo "funcion con parametros <br>";
    }

}

?>
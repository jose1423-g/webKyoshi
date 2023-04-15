<?php 

require_once (__DIR__.'/../Models/registroModel.php');

class registroController{

    public $obj;
    public $dato;

    function __construct(){
        $this->obj = new registroModel;
    }

    public function registro(){

    }

    public function holis(){
        echo "Soy la funcion mainBuscar del controller main <br>";
    }

    public function saludo(){
        echo "funcion con parametros <br>";
    }

}

?>
<?php 

require_once (__DIR__.'/../Models/premiummodel.php');


class premiumController{

    public $obj;
    public $dato;

    function __construct(){
        $this->obj = new premiumModel;
    }

    public function premium(){
    }

    public function holis(){
        echo "Soy la funcion mainBuscar del controller main <br>";
    }

    public function saludo(){
        echo "funcion con parametros <br>";
    }

}

?>
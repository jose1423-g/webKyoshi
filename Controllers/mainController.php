<?php 

require_once (__DIR__.'/../Models/indexmodel.php');
require_once './view/main.php';


class mainController{

    function __construct(){
        //echo "<br> Soy el Controller main <br>";
    }

    public function main(){
        //echo "<br> Soy la funcion o metodo del controller main  ejecutado al entrar<br>";
    }

    public function holis(){
        echo "Soy la funcion mainBuscar del controller main <br>";
    }

    public function saludo($id){
        echo "funcion con parametros <br>";
    }

}


?>
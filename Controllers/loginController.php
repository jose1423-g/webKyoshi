<?php 

require_once './view/login.php';

class loginController{

    function __construct(){
        //echo "<br> Soy el Controller login<br>";
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
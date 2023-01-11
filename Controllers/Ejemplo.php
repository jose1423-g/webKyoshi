<?php 

class Ejemplo{
    
    public function __construct()
    {
        //echo "Soy el controlador EJEMPLO <br>";   
    }

    public function articulos($articulo){
        //echo "SOY EL METODO ARTICULO";
        echo "aqui imprime el parametro  ".$articulo;
    }

    public function index(){
        echo "SOY EL METODO INDEX <br>";
    }
}
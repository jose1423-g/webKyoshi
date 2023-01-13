<?php


class Paginas extends Router{

    public function index()
    {
        echo "Soy el controller PAGINAS <br>";
    }


    public function articulo($num)
    {
        echo "Soy el metodo  ARTICULO <br>";
        echo $num;
    }

    
    public function actualizar($parametro)
    {
        //echo "";
        echo "parametro ".$parametro;
    }

    
}
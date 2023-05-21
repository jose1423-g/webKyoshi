<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class recursos_aula_model{

        private $link;
    
        function __construct(){
            $this->link = new conection;
            $this->link = $this->link->conect();
        }
    
        function index(){
            return "hola recusos";
        }

    }
?>
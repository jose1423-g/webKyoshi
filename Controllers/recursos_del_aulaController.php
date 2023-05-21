<?php 
    
    require_once (__DIR__.'/../Models/recursos_del_aulaModel.php');
    
    class recursos_del_aulaController{
        public $obj;
        public $dato;
    
        function __construct(){
            $this->obj = new recursos_aula_model;
        }

        function recursos_del_aula(){
            $data = $this->obj->index();
            return $data;        
        }
    
    }       
?>
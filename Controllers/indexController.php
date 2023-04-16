<?php 
    
    require_once (__DIR__.'/../Models/indexmodel.php');
    
    class indexController{

        public $obj;
        public $dato;
    
            function __construct(){
                $this->obj = new indexModel;
            }
    
            function index(){
                $data = $this->obj->index();
                return $data;        
            }
    
            function menu(){
                $data = $this->obj->aside_menu();
                return $data;
            }

            function explora(){
                $data = $this->obj->explora();
                return $data;
            }
    
        }   



    
?>
<?php 

    //se encraga de poder cargar los modelos y las vistas
    class Router{
        //carga el modelo
        public function modelo($modelo){
            require_once './Models'. $modelo . '.php';
            return new $modelo();
        }
        //cragar vistas
        public function vista($vista, $datos = []){
            if (file_exists('./views/'. $vista . '.php')) {
                require_once './views/'. $vista . '.php';                
            }else{
                die('Error 404');
            }
        }

        





    }
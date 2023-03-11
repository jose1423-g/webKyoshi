<?php
    /*
        Carga las vistas de los controladores.
        "Relaciona"
    */
    class View{
        
        public $mensaje;//creamos una variable mensaje
        public $alumnos = [];

        function __construct()
        {
            $this->mensaje;
            $this->alumnos;
        }
        //metodo render se ingresa un paramaetro "nombre del controlador" 
        //este metodo se lo pasamos al controller.php y creamos un objeto de la clase View en la clase controller
        public function render($nombre){   
            require './view/'. $nombre . '.php';
        }
        
    }
?>
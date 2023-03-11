<?php 

   

    /*Contiene la logica de como moldeamos o trabjamos los datos*/
    class Model{

        public $link;

        function __construct()
        {
            //Creamos un objeto de la clase conection. 
            $this->link = new conection();
        }

       
        
    }

?>
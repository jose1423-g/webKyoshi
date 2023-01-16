<?php 
    namespace Routes;


    /*
    0 = controlador
    1 = metodo 
    2 = parametro
    /articulos/update/4;
    filter_input = Toma una variable externa concreta por su nombre y opcionalmente la filtra.
    ucwords() = Convierte a mayúsculas el primer caracter de cada palabra de una cadena. 
    */

    class Config{
        private $controller;
        private $method;
        private $parameter;

        public function __construct()
        {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'],'/');
                $url = filter_input(INPUT_GET, 'url' , FILTER_SANITIZE_URL);
                //Devuelve un array de string creados por la división del parámetro string usando los delimitadores indicados en el parámetro delimiter.
                $url = explode('/', $url);  
                $url = array_filter($url); 
                print_r($url); 
                echo "<br><br>";

                if ($url[0] == 'index.php') {
                    echo "true";
                    $this->controller = 'ejemplo';
                }else{
                    $this->controller = strtolower(array_shift($url));
                }

                $this->method = strtolower(array_shift($url));
                if (!$this->method) {
                    $this->method = 'index';                    
                }
                //la variable $parameter es igual a la $url se convertira en un array la variable $parameter
                $this->parameter = $url;
                echo "paramter = a la url <br>";
                var_dump($this->parameter);
                echo "<br><br><br>";
        }
        else
        {
            echo "Carga el controlador y metodo asignado por defecto <br>";
        }

    }

    public function getcontroller(){
       return $this->controller;
    }
    public function getmethod(){
        return $this->method;
    }
    public function getparamter(){
        return $this->parameter;
    }



}
<?php 
    namespace Routes;

use Controllers\Ejemplo;

    /*
    0 = controlador
    1 = metodo 
    2 = parametro
    /articulos/update/4;
    */

    class Config{
        protected $controllerActual = 'ejemplo';
        protected $metodActual = 'index';
        protected $parametros = [];

        public function __construct()
        {
            print_r($this->getUrl());

            $url = $this->getUrl();


            if (file_exists('./Controllers/'.ucwords($url[0]).'.php')) {                
                //Si existe se setea como controlador por defecto;
                $this->controllerActual = ucwords($url[0]); //le asignamos a la variable controllerActual el valor de url en la posicion 0 
                //unset = Destruye una o mas variables especificadas
                unset($url[0]);
                
            }
                require_once './Controllers/'. $this->controllerActual.'.php';
                //creamos un nuevo objeto del controlador
                $this->controllerActual = new $this->controllerActual;

            //verificamos si el metodo existe
            if (isset($url[1])) {//si la el metodo existe;
                if (method_exists($this->controllerActual, $url[1])) {
                    //chequeamos el metodo
                    $this->metodActual = $url[1];
                }   
            }

            //Cargamos el parametro si es que existe
            $this->parametros = $url ? array_values($url) : [];//operadores ternarios
            //print_r("imprimo la url de la pagina  ".$url);
            //
            call_user_func_array([$this->controllerActual, $this->metodActual], $this->parametros);
            
        }

        public function getUrl(){
            //echo $_GET['url'];

            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }

        }


    }

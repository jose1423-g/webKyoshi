<?php 
    //namespace Routes;
    //se encraga de poder cargar los modelos y las vistas
    namespace Routes;

    class Router{

        public static function router(Config $config)
        {   
            $controller = $config->getcontroller();
            $url = ROOT . 'Controllers' . DS . $controller . '.php';
            $method = $config->getmethod();

            echo $url;

            if ($method == 'index.php') {
                echo 'true';
                $method = 'index';
            }

            $parameter = $config->getparamter();











                            



        }


    }
    










    /*
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

    }*/
<?php 

error_reporting(0);

class App{

    /* 
    url[0] = controller
    url[1] = metodo
    url[2] = parametros
    */
    public $metodo;

    function __construct(){
        
    $url = $_GET['url'];

    if (isset($_GET['url'])) {

        $url = rtrim($url, '/');
        $url = explode('/',$url);

        if ($url[0]) {
            $obj = $url[0].'Controller';
            $controller = './Controllers/'. $url[0] .'Controller.php';

            if (file_exists($controller)) {
                require_once $controller;
                $controller = new $obj;

                $controller->{$url[0]}();
                
                $param = sizeof($url);   
                if ($param > 1) {
                    if($param > 2){               
                        $controller->{$url[1]}($param);   
                    }else{
                        $controller->{$url[1]}();
                    }            
                }
            } else {
                //require_once './view/error.php'; 
            }            
        }

    } else {
        require_once './Controllers/indexController.php';
        require_once './view/index.php';
    }

          
    }

}

?>
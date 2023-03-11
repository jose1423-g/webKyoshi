<?php 

    class App{

        function __construct(){

            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            
            $url = explode('/',$url);

            //si la url[0] es null se cargar el controlador asignado por defecto
            if (empty($url[0])) {
                $file_controller = 'controllers/index.php';//controller asiganado por defecto
                require_once $file_controller;//requerimos el controller
                $controller = new Index;//creamos un objeto de la clase requerida   
                //llamamos el ametodo loadmodel para asiganarle un modelo
                $controller->loadModel('index');
                $controller->index();  
                return false;
            } else {
                //asigno mi controlador
                $file_controller = 'controller/'. $url[0] .'.php';
            }
            //si existe el $file_controller requerimos el archivo 
            if (file_exists($file_controller)) {
                require_once $file_controller;
                //inicializa el controller
                $controller = new $url[0];//creamos un objeto del controller 
                $controller->loadModel($url[0]);//le aisganmos un modelo al controlador                 
                //se obtine el numero de parametros
                $param = sizeof($url);
                //
                if ($param > 1) {
                    if($param > 2){
                        $param = [];
                        for ($i=2; $i < $param; $i++) { 
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);   
                    }else{
                        //solo se llama al metodo
                        $controller->{$url[1]}();
                    }
                } else {
                    //si se llama a un controlador
                    $controller->render();
                }
            }else{
                //error 404
                include_once 'controllers/Error.php';
                $error = new Error404();
            }   
        
        }

    }

?>
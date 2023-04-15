<?php 

//error_reporting(0);
    /* 
    url[0] = controller
    url[1] = metodo
    url[2] = parametros
    */
    if (isset($_GET['url'])) {
        $url = $_GET['url'];     
        $url = explode('/',$url);
        /* echo  print_r($url, true)."<br>"; */

        if ($url[0]) {
            $controller = strlen($url[0]);
            //echo $controller ."<br>";
            $controller = substr($url[0], '-'.$controller);
            //le aisignamos un metodo por defecto
            $index = $controller;
            //para requerir la vista
            $view = $controller .".php";
            //para instanciar la clase
            $instanclass = $controller ."Controller";
            //para requerir el controlador
            $controller = $controller ."Controller.php";
            require_once ('./controllers/'.$controller); 
            $obj = new $instanclass;
            $data = $obj->{$index}();
        
            if (!$url[1]){
                //echo $data;
                //imprime el metodo de la clase instanciada
                require_once ('./view/'.$view);
                //echo "<pre>". print_r($data, true)  ."</pre>"; 
            } else {
                $metodo = strlen($url[1]);  
                $metodo = substr($url[1], '-'.$metodo);
                $view_metodo = "/../view/contenido/".$metodo.".php";
                if (method_exists($obj, $metodo)) {
                    $resp = $obj->{$metodo}();
                    require_once __DIR__.$view_metodo;
                }else {
                    require_once __DIR__.'/../view/error.php';
                }
                //echo "<pre>". print_r($resp, true)  ."</pre>"; 
            }
        }

    } else {
        require_once (__DIR__.'/../controllers/indexController.php');
        $obj = new indexController;
        $data = $obj->index();
        require_once __DIR__.'/../view/index.php';  
        //echo json_encode($data);
    }

/* $param = sizeof($url);   
                if ($param > 1) {
                    if($param > 2){               
                        $controller->{$url[1]}($param);   
                    }else{
                        $controller->{$url[1]}();
                    }            
                } */

?>


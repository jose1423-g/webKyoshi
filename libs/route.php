<?php 
    require_once(__DIR__.'/../controllers/indexController.php');
    require_once(__DIR__.'/../controllers/mainController.php');
    require_once(__DIR__.'/../controllers/registroController.php');
    require_once(__DIR__.'/../controllers/loginController.php');


    $index = new indexController;
    $main = new mainController;
    $registro = new registroController;
    $login = new loginController;

    $fecha_hoy = date('Y-m-d');
    $op = (isset($_REQUEST['op'])) ? $_REQUEST['op'] : ''; 
    $resp = (isset($_REQUEST['resp'])) ? $_REQUEST['resp'] : ''; 
    
    if ($op == 'http://localhost/webkyoshi/') {
        $data = $index->menu();
        echo json_encode($data);
        exit();
    } elseif ($op == 'preguntas'){
        $data = $index->explora();
        echo json_encode($data);        
        exit();
    } elseif($op == 'search_explora'){  
        $data = $index->search_explora($resp);
        echo json_encode($data);        
        exit();
    }

    if ($op  == 'search') {
        $data = $index->search($resp);
        echo json_encode($data);
        exit();
    
    } elseif ($op == 'login') {
        $data = $login->login();
        echo json_encode($data);
        exit();
    } elseif ($op  = 'registro') {
        $data = $registro->registro();
        echo json_encode($data);
        exit();

    } 



?>
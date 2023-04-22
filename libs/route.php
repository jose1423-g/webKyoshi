<?php 
    require_once(__DIR__.'/../controllers/indexController.php');
    require_once(__DIR__.'/../controllers/mainController.php');

    $index = new indexController;
    $main = new mainController;

    $op = $_REQUEST['op'];
    $resp = $_REQUEST['resp'];
    
    if ($op == 'http://localhost/webkyoshi/') {
        $data = $index->menu();
        echo json_encode($data);
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
    }


?>
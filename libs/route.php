<?php 
    require_once(__DIR__.'/../controllers/indexController.php');
    require_once(__DIR__.'/../controllers/mainController.php');

    $index = new indexController;
    $main = new mainController;

    $op = $_REQUEST['op'];
    
    if ($op == 'http://localhost/webkyoshi/') {
        $data = $index->menu();
        echo json_encode($data);
    } elseif ($op == 'http://localhost/webkyoshi/preguntas'){
        $data = $index->explora();
        echo json_encode($data);        
        //echo json_encode("si entro a preguntas");
        exit();
    } elseif($op == ''){

    }

?>
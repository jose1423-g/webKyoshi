<?php 
    require_once(__DIR__.'/../controllers/indexController.php');
    require_once(__DIR__.'/../controllers/mainController.php');

    $index = new indexController;
    $main = new mainController;

    $op = $_REQUEST['op'];
    
    if ($op == 'http://localhost/webkyoshi/') {
        $data = $index->menu();
        echo json_encode($data);
    }

?>
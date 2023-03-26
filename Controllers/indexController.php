<?php 
    
    require_once (__DIR__.'/../Models/indexmodel.php');
    
    $obj = new indexModel;    

    $op = $_REQUEST['op'];

    if ($op == 'http://localhost/webkyoshi/') {

        $data =  $obj->indexmodel();
        echo json_encode($data);
    }

    
?>
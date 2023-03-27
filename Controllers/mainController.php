<?php 

    require_once (__DIR__.'/../Models/mainModel.php');
 //   require_once (__DIR__.'/../view/main.php');


    $obj = new mainModel;    

    $op = $_REQUEST['op'];

    if ($op == 'http://localhost/webkyoshi/main/'){
        
        $data =  $obj->MenuAside();

        echo json_encode($data);
    }


?>
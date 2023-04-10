<?php 

    require_once (__DIR__.'/../Models/mainModel.php');
 //   require_once (__DIR__.'/../view/main.php');


    $obj = new mainModel;    

    $op = $_REQUEST['op'];

    if ($op == 'http://localhost/webkyoshi/'){
        $data =  $obj->MenuAside();
        echo json_encode($data);
    }

    if ($op == 'http://localhost/webkyoshi/main/#lluvia-de-ideas'){
        $data =  $obj->load();
        echo json_encode($data);
    }


    if ($op == 'Lluvia de ideas') {
        $data = $obj->read($op);
        echo json_encode($data);
    } elseif ($op == 'Preguntas'){
        $data = $obj->read($op);
        echo json_encode($data);
    } elseif ($op == 'Preguntas-guía'){
        $data = $obj->read($op);
        echo json_encode($data);
    } /* elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } elseif ($op == ''){
        echo json_encode($op);
    } else {
        

    } */



    

?>
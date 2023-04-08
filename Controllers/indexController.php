<?php 
    
    require_once (__DIR__.'/../Models/indexmodel.php');
    
    $obj = new indexModel;    

    $op = $_REQUEST['op'];

    if ($op == 'http://localhost/webkyoshi/') {
        
        $data =  $obj->indexmodel();
        echo json_encode($data);
    }

    if ($op == 'Preguntas') {
        $data = $obj->preguntas($op);
        echo  json_encode($data);

    } elseif ($op == 'Diagramas'){
        $data = $obj->diagramas();
        echo  json_encode($data);

    } elseif ($op == 'Mapascognitivos'){
        $data = $obj->mapas();
        echo  json_encode($data);
        
    } elseif ($op == 'Estrategiasgrupales'){
        $data = $obj->estrategias();
        echo  json_encode($data);
    } 




    
?>
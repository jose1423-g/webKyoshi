<?php 

    require_once (__DIR__.'/../Models/mainModel.php');
 //   require_once (__DIR__.'/../view/main.php');


    $obj = new mainModel;    

    $op = $_REQUEST['op'];

    if ($op == 'http://localhost/webkyoshi/'){
        $data =  $obj->MenuAside();
        echo json_encode($data);
        exit();
    }

    if ($op == 'http://localhost/webkyoshi/main/#lluvia-de-ideas'){
        $data =  $obj->load();
        echo json_encode($data);
        exit();
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
        
    }  elseif ($op == 'Preguntas literales'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Preguntas exploratorias'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'SQA (qué sé, qué quiero saber, qué aprendí)'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'RA-P-RP (respuesta anterior, pregunta, respuesta posterior)'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Cuadro sinóptico'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Cuadro comparativo'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Matriz de clasificación'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Matriz de inducción'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Técnica heurística UVE de Gowin'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Correlación'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Analogía'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Diagramas'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Diagrama radial'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Diagrama de árbol'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Diagrama de causa-efecto'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } elseif ($op == 'Diagrama de flujo'){
        $data = $obj->read($op);
        echo json_encode($data);
        
    } else {
        
        

    } 



    

?>
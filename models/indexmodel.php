<?php 

    require_once '../libs/model.php';

    class indexModel extends model{
    
    public function __construct(){
        parent::__construct();
    }

    function index(){
        $qry = "SELECT * FROM contenido_index";
        $pre = mysqli_prepare($this->link->conexion(), $qry);
        $pre->execute();
        $resp = $pre->get_result();
        while ($row = $resp->fetch_array(MYSQLI_ASSOC)) {
            $data = $row['Titulo'];
            $data = $row['Contenido'];
            $data = $row['Img'];
        }
        return $data;
    }

       
    }















?>
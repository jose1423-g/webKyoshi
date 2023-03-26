<?php 

require_once (__DIR__.'/../libs/conection.php');

    class loginModel{

        private $link;

        function __construct(){
            $this->link = new  conection;
            $this->link = $this->link->conect();
        }

        function indexmodel(){
            $qry = "SELECT indexId, Titulo, Contenido, Img, Activo FROM contenido_index";
            $pre = mysqli_prepare($this->link, $qry);
            $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
        }
       
    }







?>
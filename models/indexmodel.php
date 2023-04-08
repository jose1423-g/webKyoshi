<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class indexModel{

        private $link;
        private $dato;

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
        
        //EXPLORA
        function preguntas($dato){
            $qry = "SELECT texto FROM menu WHERE texto LIKE '%$dato%'";
            $pre = mysqli_prepare($this->link, $qry);
            $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
        }

        function diagramas(){
            $qry = "SELECT  FROM ";//hacer un left join
            $pre = mysqli_prepare($this->link, $qry);
            $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
        }

        function mapas(){
            $qry = "SELECT  FROM ";//hacer un left join
            $pre = mysqli_prepare($this->link, $qry);
            $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
        }

        function estrategias(){
            $qry = "SELECT  FROM ";//hacer un left join
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
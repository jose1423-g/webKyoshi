<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class mainModel{

        private $link;

        function __construct(){
            $this->link = new  conection;
            $this->link = $this->link->conect();
        }

        function MenuAside(){

            $qry = "SELECT id_menu, texto FROM menu WHERE estatus = 1";
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
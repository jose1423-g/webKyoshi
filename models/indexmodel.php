<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class indexModel{

        private $link;
        private $dato;
    
        function __construct(){
            $this->link = new conection;
            $this->link = $this->link->conect();
        }
    
        function index(){
            $qry = "SELECT indexId, Titulo, Contenido, Img FROM contenido_index";
            $data =  mysqli_query($this->link, $qry);
            return $data;
        }
    
        function aside_menu(){
            $qry = "SELECT id_menu, href, texto, estatus FROM menu";
            $data =  mysqli_query($this->link, $qry);
            //$data = mysqli_fetch_array($data);
            return $data;
        }

        function explora(){
            $qry = "SELECT t1.Titulo, t2.href, t3.ruta AS ruta_img
            FROM contenido t1 
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN menu t2 ON t1.id_contenido = t2.id_contenido 
            WHERE Titulo LIKE '%preguntas%'"; 
            $resp = mysqli_query($this->link, $qry);
            $data = array();
            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }   
            return $data;

        }

        function search_explora($dato){
            $qry = "SELECT t1.Titulo, t2.href, t3.ruta AS ruta_img
            FROM contenido t1 
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN menu t2 ON t1.id_contenido = t2.id_contenido 
            WHERE Titulo LIKE '%$dato%'"; 
            $resp = mysqli_query($this->link, $qry);
            $data = array();
            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }   
            return $data;
        }

        function search($dato){
            $qry = "SELECT texto, href FROM menu WHERE texto LIKE '%$dato%' AND estatus = 1"; 
            $resp = mysqli_query($this->link, $qry);
            $data = array();
            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }   
            return $data;
        }

    }
?>
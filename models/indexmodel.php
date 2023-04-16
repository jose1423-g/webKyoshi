<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class indexModel{

        private $link;
    
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
            $qry = "SELECT id_menu, href, texto FROM menu";
            $pre =  mysqli_prepare($this->link, $qry);
            $pre->execute();
                $resp = $pre->get_result();
    
                $data = array();
    
                while ($obj = $resp->fetch_object()) {
                    array_push($data, $obj);
                }
                return $data;
        }

        function explora(){
            $qry = "SELECT t1.Titulo, t2.href, t3.ruta AS ruta_img
            FROM contenido t1 
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN menu t2 ON t1.id_contenido = t2.id_contenido 
            WHERE Titulo LIKE '%preguntas%'; "; 
            $resp = mysqli_query($this->link, $qry);
            $data = array();
            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }   
            return $data;

        }


    }














?>
<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class mainModel{

        private $link;
        
        function __construct(){
            $this->link = new conection;
            $this->link = $this->link->conect();
        }

        function main(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_contenido = t2.id_contenido
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE Titulo LIKE 1";
            $data = mysqli_query($this->link, $qry);
            //$data = mysqli_fetch_array($data);
            return $data;
            /* $pre =  mysqli_prepare($this->link, $qry);
            $pre->execute();
                $resp = $pre->get_result();

                $data = array();

                while ($obj = $resp->fetch_object()) {
                    array_push($data, $obj);
                }
                return $data; */
        }

        function lluvia(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_contenido = t2.id_contenido
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 1";
            $data = mysqli_query($this->link, $qry);
            //$data = mysqli_fetch_array($data);
            return $data;

            /* $pre =  mysqli_prepare($this->link, $qry);
            $pre->execute();
                $resp = $pre->get_result();

                $data = array();

                while ($obj = $resp->fetch_object()) {
                    array_push($data, $obj);
                }
                return $data; */
        }

        function preguntas(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_contenido = t2.id_contenido
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 4";
            $data = mysqli_query($this->link, $qry);
            //$data = mysqli_fetch_array($data);
            return $data;
            /* $pre =  mysqli_prepare($this->link, $qry);
            $pre->execute();
                $resp = $pre->get_result();

                $data = array();

                while ($obj = $resp->fetch_array()) {
                    array_push($data, $obj);
                }
                return $data; */
        }


    }
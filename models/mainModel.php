<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class mainModel{

        private $link;
        
        function __construct(){
            $this->link = new conection;
            $this->link = $this->link->conect();
        }
        
        function lluvia(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
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
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 4";
            $data = mysqli_query($this->link, $qry);
            return $data;          
        }

        function preguntas_guia(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 5";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function preguntas_literales(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 6";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function preguntas_exploratorias(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 7";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function SQA(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 8";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function RA_P_RP(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 9";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function cuadro_sinoptico(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 10";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function cuadro_comparativo(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 11";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function matriz_de_clasificacion(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 12";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function matriz_de_induccion(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 13";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function tecnica_heuristica_uve_de_gowin(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 14";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function correlacion(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 15";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function analogia(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 16";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function diagramas(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 18";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function diagrama_radial(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 19";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function diagrama_de_arbol(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 20";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function diagrama_de_causa_efecto(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 21";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function diagrama_de_flujo(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 22";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function mapas_cognitivos(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 23";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function mapa_mental(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 24";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

        function mapa_conceptual(){
            $qry  = "SELECT t1.Titulo, t2.Que, t2.Como, t2.Para, t1.sub_para_que, t1.Que_es, t1.Como_se, t1.Para_que, 
            t3.ruta AS ruta_img, t4.ruta AS ruta_video
            FROM contenido t1
            LEFT JOIN titulos t2 ON t1.id_titulo = t2.id_titulo
            LEFT JOIN images t3 ON t1.id_contenido = t3.id_contenido
            LEFT JOIN videos t4 ON t1.id_contenido = t4.id_contenido
            WHERE t1.id_contenido = 25";
            $data = mysqli_query($this->link, $qry);
            return $data;
        }

    }
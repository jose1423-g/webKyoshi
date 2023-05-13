<?php 

    require_once (__DIR__.'/../Models/mainModel.php');
    class mainController{

        public $obj;
        public $dato;

        function __construct(){
            $this->obj = new mainModel;
        }

        function main(){
            $data = $this->obj->lluvia();
            return $data;
        }

        function lluvia_de_ideas(){
            $data = $this->obj->lluvia();
            return $data;        
        } 
        function preguntas(){
            $data = $this->obj->preguntas();
            return $data;
        }     
        function preguntas_guia(){
            $data = $this->obj->preguntas_guia();
            return $data;        
        }
        function preguntas_literales(){
            $data = $this->obj->preguntas_literales();
            return $data;        
        }
        function preguntas_exploratorias(){
            $data = $this->obj->preguntas_exploratorias();
            return $data;        
        }
        function SQA(){
            $data = $this->obj->SQA();
            return $data;        
        }
        function RA_P_RP(){
            $data = $this->obj->RA_P_RP();
            return $data;        
        }
        function cuadro_sinoptico(){
            $data = $this->obj->cuadro_sinoptico();
            return $data;        
        }
        function cuadro_comparativo(){
            $data = $this->obj->cuadro_comparativo();
            return $data;        
        }
        function matriz_de_clasificacion(){
            $data = $this->obj->matriz_de_clasificacion();
            return $data;        
        }
        function matriz_de_induccion(){
            $data = $this->obj->matriz_de_induccion();
            return $data;        
        }
        function tecnica_heuristica_uve_de_gowin(){
            $data = $this->obj->tecnica_heuristica_uve_de_gowin();
            return $data;        
        }
        function correlacion(){
            $data = $this->obj->correlacion();
            return $data;        
        }
        function analogia(){
            $data = $this->obj->analogia();
            return $data;        
        }
        function diagramas(){
            $data = $this->obj->diagramas();
            return $data;        
        }
        function diagrama_radial(){
            $data = $this->obj->diagrama_radial();
            return $data;        
        }
        function diagrama_de_arbol(){
            $data = $this->obj->diagrama_de_arbol();
            return $data;        
        }
        function diagrama_de_causa_efecto(){
            $data = $this->obj->diagrama_de_causa_efecto();
            return $data;        
        }
        function diagrama_de_flujo(){
            $data = $this->obj->diagrama_de_flujo();
            return $data;        
        }
        function mapas_cognitivos(){
            $data = $this->obj->mapas_cognitivos();
            return $data;        
        }
        function mapa_mental(){
            $data = $this->obj->mapa_mental();
            return $data;        
        }
        function mapa_conceptual(){
            $data = $this->obj->mapa_conceptual();
            return $data;        
        }
        // function (){
        //     $data = $this->obj->();
        //     return $data;        
        // }
        // function (){
        //     $data = $this->obj->();
        //     return $data;        
        // }
        
        

        

    }   


    

?>
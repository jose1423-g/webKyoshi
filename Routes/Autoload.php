<?php 
    namespace Routes;
    //dirname = funcion nativa de php 
    class Autoload{
        public static function run(){
            spl_autoload_register( function($class){
                $ruta = str_replace("\\", "/", $class) . ".php";
                print $ruta ."<br><br>";
                include_once $ruta;
            });
        }

    }

<?php 

    include_once (__DIR__.'/../config/config.php');

    class conection{

        public static function conect(){
            $link = new mysqli(host, user, password, db);
            if (!$link) {
                echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            } else{
                //echo "Conexion exitosa ". mysqli_get_host_info($link) . PHP_EOL;
            }
            return $link;
        }
    }

?>
<?php 

    require_once (__DIR__.'/../libs/conection.php');

    class registroModel{

        private $link;

        function __construct(){
            $this->link = new  conection;
            $this->link = $this->link->conect();
        }
        
        function agregar($apellidos, $nombres, $username, $email, $pass, $fecha_hoy){
            $qry = "INSERT INTO usuarios(Apellidos, Nombre, name_user, Email, Pass, fecha_registro, Activo)VALUES('$apellidos','$nombres','$username','$email','$pass','$fecha_hoy','1')";
            $data = mysqli_query($this->link, $qry);
            if ($data) {
                $data = "Resgitro exitoso :)";
                return $data;
            } else {
                $data = "Ups algo salio mal :(";
                return $data;
            }
            
        }
       


    }















?>
<?php 

require_once (__DIR__.'/../libs/conection.php');

    class loginModel{

        private $link;

        function __construct(){
            $this->link = new  conection;
            $this->link = $this->link->conect();
        }
        
        function session($name_user, $pass){
            $qry = "SELECT Pass, name_user FROM usuarios WHERE  Pass = '$pass' AND name_user = '$name_user' OR Email = '$name_user'";
            $result = mysqli_query($this->link, $qry);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                return 1;
            } else {
                return -1;
            }

        }
       
    }







?>
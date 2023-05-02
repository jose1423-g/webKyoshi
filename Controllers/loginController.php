<?php 

require_once (__DIR__.'/../Models/loginmodel.php');


class loginController{

    public $obj;
    public $dato;

    function __construct(){
        $this->obj = new loginModel;
    }

    public function login(){
        $name_user = (isset($_REQUEST['name_user'])) ? $_REQUEST['name_user'] : ''; 
        $pass = (isset($_REQUEST['pass'])) ? $_REQUEST['pass'] : '';
        $data = $this->obj->session($name_user, $pass);
        $result = 0;
        if ($data == 1) {
            session_start();
            $_SESSION['name_user'] = $name_user;
            $msg = "";
            $result = 1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
            exit();
        } else {
            $msg = "Error User o password incorrect";
            $result = -1;
            $a_data = array('result' => $result, 'msg' => $msg);
            return $a_data;
        }

        


    }

}

?>
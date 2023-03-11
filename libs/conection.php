<?php 



    class conection{

        private $host;
        private $db;
        private $user;
        private $password;
        public $link;
    
        public function __construct(){
            $this->host     = constant('host');
            $this->db       = constant('db');
            $this->user     = constant('user');
            $this->password = constant('password');
            $this->link;
        }
        
        public function conexion(){
            
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->db,);
            if (!$this->link) {
                die('Error conection'. mysqli_connect_error() . mysqli_connect_errno());
            }
                //echo 'Conectada con Exito  '. mysqli_get_host_info($this->link);
                return $this->link;
        }
       
        
    }

?>
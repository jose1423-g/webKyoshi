<?php
    
    error_reporting(0);
    //include "./views/components/header.php";

use Controllers\Ejemplo;
use Routes\Config;
use Routes\Router;


    require_once 'Routes/Autoload.php';
    Routes\Autoload::run();
    
    //require_once('./Routes/Autoload.php');
    //require_once('./Routes/Config.php');
    //require_once('./Routes/router.php');
    $config = new Config;


    //include "./views/components/footer.php";
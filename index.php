<?php
    
    //error_reporting(0);
    //include "./views/components/header.php";
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)).DS);
    define('URL','http://localhost/webkyoshi/');

use Controllers\Ejemplo;
use Routes\Config;
use Routes\Router;


    require_once 'Routes/Autoload.php';
    Routes\Autoload::run();
    Routes\Router::router(new Config);


    //include "./views/components/footer.php";
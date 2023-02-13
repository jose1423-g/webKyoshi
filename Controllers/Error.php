<?php 

    class Error404 extends Controller{

        //public $mesaje = "Error al cargar el recurso";

        function __construct()
        {
            //hace refrencia al constructor de la clase controller
            parent::__construct();
            //instaciamos la varaible $mensaje como un objeto y le asignamos un valor de tipo string
            $this->view->mensaje = "Error al cargar el recurso";
            $this->view->render('error/index');
        }
    }

?>
<?php 
    /* 
    Controller.php relaciona una vista con los controladores
    tambie carga el model para cada controlador.
    */
    //clase base 
    //para heredar los metodos que heredaran los controladores de la carpeta controller
    //asigna las vistas y se las pasa a los controllers 
    class Controller{
        public $view;
        public $model;

        function __construct()
        {
            //Crea un nuevo objeto de la clase View
            $this->view = new View();
        }

        //carga el modelo para las vistas
        function loadModel($model){
            $url = 'model/'. $model . 'model.php'; 
            if (file_exists($url)) {//si existe el archivo 
                require $url;
                $modelname = $model . 'Model';//asiganmos a modelname el nombre de la clase modelo 
                //creamos un objeto de la clase 
                $this->model = new $modelname();//
            }
        }
    
    
    }

?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main - kyoshi</title>
    <!-- tailwind --> 
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- fontawesome --> 
    <script src="https://kit.fontawesome.com/1163d1da29.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('url');?>public/css/style.css">
</head>
<body>
<header class="bg-white h-20 sticky z-30 top-0 box-border shadow-md">
    <div class="mx-auto p-5">
        <div class="flex justify-between items-center"><!-- justify-between -->
            <div class="flex lg:hidden">
                <button type="button" class="lg:hidden" id="btn-aside"><img src="<?php echo constant('url');?>public/img/iconmenu.png" alt="" width="45px"></button>
            </div>
            <div class="flex items-center mr-3">
                <a href="<?php  echo constant('url'); ?>">
                    <img src="<?php echo constant('url');?>public/img/icon-logo.png" alt="Logo" width="40px" height="auto">
                </a>
                <h1 class="ml-3 text-3xl font-semibold max-lg:hidden">Titulo</h1>
            </div>
            <div class="flex items-center">
                <div class="flex items-center">
                    <a class="buscador pointer"><img src="<?php echo constant('url');?>public/img/search.png" alt="" width="30px"></a>
                    <a class="mx-3 pointer"><img src="<?php echo constant('url');?>public/img/shopping.png" alt="" width="30px"></a>
                    <button type="button" class="lg:hidden" id="btn-menu"><img src="<?php echo constant('url');?>public/img/pointmenu.png" alt="" width="45px"></img></button>
                </div>
                <div class="flex items-center max-lg:shadow max-lg:block max-lg:hidden max-lg:p-3 max-lg:bg-white max-lg:w-full max-lg:top-20 max-lg:start-0 max-lg:absolute menu-drop">
                    <ul class="block font-semibold lg:flex">
                        <li class="max-lg:mb-2 mx-3"><a class="hover:text-blue-600 pointer" id="toggle-menu">Recursos<i class="fa-sharp fa-solid fa-caret-down ml-1"></i></a>
                            <ul class="bg-white pl-6 max-lg:list-disc lg:p-3 lg:absolute lg:z-50 top-14 lg:shadow-md rounded hidden dropdown-menu">
                                <li><a class="hover:text-blue-600" href="#">Plantillas</a></li>
                                <li><a class="hover:text-blue-600" href="#">eBooks</a></li>
                                <li><a class="hover:text-blue-600" href="#">Guias de practica</a></li>
                                <li><a class="hover:text-blue-600" href="#">Casos</a></li>
                                <li><a class="hover:text-blue-600" href="#">Infografias</a></li>
                                <li><a class="hover:text-blue-600" href="#">Rubricas</a></li>
                            </ul>
                        </li>
                        <li class="mx-3 max-lg:mb-2"><a class="hover:text-blue-600" href="<?php echo constant('url');?>premium/">Premium</a></li>
                        <li class="mx-3 max-lg:mb-2"><a class="hover:text-blue-600" href="#">Recursos del aula</a></li>
                        <li class="mx-3 max-lg:mb-2"><a class="hover:text-blue-600" href="<?php echo constant('url');?>tienda/">Tienda</a></li>
                        <li class="mx-3 max-lg:mb-2"><a class="hover:text-blue-600" href="<?php echo constant('url');?>main/lluvia_de_ideas">Contenido</a></li>
                        <!-- <li class="mx-3 max-lg:mb-2"><a class="hover:text-blue-600" href="http://localhost/webkyoshi/session_destroy.php">Cerrar</a></li> -->


                    </ul>
                    <div class="max-lg:border-t max-lg:p-2">
                        <?php  if (isset($_SESSION['name_user'])) { ?>
                            <button type="button" class="mr-2 font-semibold rounded-lg bg-blue-600 p-2 text-white" title="Perfil"><img src="<?php echo constant('url') ?>public/img/icono-perfil.png" alt="" width="30px"></button>
                       <?php } else { ?>
                            <button type="button" class="mr-2 font-semibold rounded-md  p-2 hover:text-blue-600" id="btn-login">Iniciar sesión</button>
                            <button type="button" class="text-white font-semibold bg-blue-600 rounded-md p-2" id="btn-register">Regístrate</button>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>
</header>
<div class="w-full h-screen z-40 bg-white fixed top-20 hidden" id="content-search">
    <div class="container mx-auto p-2">
        <div class="flex justify-end mb-5">
            <button type="button" id="close-search"><img src="<?php echo constant('url');?>public/img/closemenu.png" alt="close-search" width="40px"></button>
        </div>
        <div class="flex justify-center">
            <form action="#" method="post" class="w-4/6" id="form-search">
                <input type="search" class="w-full h-10 border-2 border-blue-600 rounded border-blue-500 mb-2" placeholder="Buscar estrategia" id="icon-search">
                <h1 class="font-semibold text-2xl">Resultados</h1>
                <div class="p-3 rounded result-search overflow-y-auto">
                    <ul id="result-search">
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>

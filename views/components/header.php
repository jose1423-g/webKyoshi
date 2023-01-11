<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITULO</title>
    <link href="http://localhost/webkyoshi/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="http://localhost/webkyoshi/views/recursos/css/style.css">
</head>
<body>

    <header class="flex justify-between items-center px-5 h-20 border fixed top-0 w-screen bg-white">
            <a href="#">
                <img src="http://localhost/webkyoshi/views/recursos/img/neptuno.png" alt="icon-logo" width="45rem">
            </a> 
            <div class="lg:hidden flex">
                <button type="button" class="mr-4 search" id="">
                    <img src="http://localhost/webkyoshi/views/recursos/img/search.png" alt="icon-search" width="35rem">
                </button>
                <a href="#" class="mr-4 bg-sky-400 p-2 text-white rounded">Login</a>
                <button class="" id="btn_menu">
                    <img src="http://localhost/webkyoshi/views/recursos/img/menu.png" alt="menu_logo" width="40rem">
                </button>
            </div>
            <div class="flex justify-between w-full items-center hidden fixed left-0 top-20 z-20 lg:static lg:flex" id="navbar-collapse">  
                <nav class="p-5 bg-slate-50 lg:bg-white">
                    <ul class="block lg:flex lg:pt-0">
                        <li class="mb-3 lg:mb-0 lg:mr-4 "><a href="#" class="hover:border-b-2 border-sky-400">Plantillas</a></li>
                        <li class="mb-3 lg:mb-0 lg:mr-4 "><a href="#" class="hover:border-b-2 border-sky-400">eBooks</a></li>
                        <li class="mb-3 lg:mb-0 lg:mr-4 "><a href="#" class="hover:border-b-2 border-sky-400">Guias de practica</a></li>
                        <li class="mb-3 lg:mb-0 lg:mr-4 "><a href="#" class="hover:border-b-2 border-sky-400">Casos</a></li>
                        <li class="mb-3 lg:mb-0 lg:mr-4 "><a href="#" class="hover:border-b-2 border-sky-400">Infografias</a></li>
                        <li class="lg:mr-4"><a href="#" class="hover:border-b-2 border-sky-400">Rúbricas</a></li>
                    </ul>
                </nav>   
                <div class="lg:flex ml-7 lg:ml-0 hidden">
                    <button type="button" class="mr-4 search" id="">
                        <img src="http://localhost/webkyoshi/views/recursos/img/search.png" alt="icon-search" width="35rem">
                    </button>
                    <a href="#" class="mr-4 bg-sky-400 p-2 text-white rounded font-medium">Login</a>
                    <a href="#" class="bg-sky-500 p-2 text-white rounded font-medium">Sign in</a>
                </div>
            </div>
    </header>
    <div class="hidden bg-slate-50 p-5 fixed top-20 w-screen z-20" id="search-collapse">
        <form action="#" method="get" class="flex justify-center">
            <div>
            <label for="form-search" class="mr-1"></label>
            <input type="search" class="w-64 sm:w-96 font-medium rounded border-sky-400" name="form-search" id="form-search" placeholder="¿Qué quieres aprender?">
        
            <div class="bg-blue-500 ml-1 mt-px w-64 sm:w-96  p-3 rounded " id="">
                <ul>
                    <li><a href="#" class="">hola</a></li>
                </ul>
            </div>    
        </div>
        </form>
    </div>

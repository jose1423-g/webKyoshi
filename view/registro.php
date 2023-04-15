<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Kyoshi</title>
    <!-- tailwind --> 
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- fontawesome --> 
    <script src="https://kit.fontawesome.com/1163d1da29.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('url');?>public/css/style.css">
</head>
<body>
    

<header class="flex justify-around items-center bg-white h-14 box-border shadow-md">
        <div class="flex mr-3">
            <a href="<?php  echo constant('url'); ?>">
                <img src="<?php echo constant('url');?>public/img/icon-logo.png" alt="Logo" width="35px" height="auto">
            </a>
        </div>
        <div></div>
        <div>
            <a class="font-bold text-blue-600" href="<?php echo constant('url') ?>login/">Iniciar sesíon</a>
        </div>
    </header>    
    
    <div class="mt-20 p-2 flex justify-center">
        <form class="bg-white w-96 rounded p-3 shadow-lg"  action="" method="POST" id="">
            <div class="mb-5 text-center">
                <h1 class="text-3xl font-bold text-blue-600">Sign up</h1>
            </div>
            <div class="mb-4">
                <input type="text" class="w-full rounded border-blue-500" name="apellido" id="apellido" placeholder="Apellido"> 
            </div>
            <div class="mb-4">
                <input type="text" class="w-full rounded border-blue-500" name="nombre" id="nombre" placeholder="Nombre"> 
            </div>
            <div class="mb-4">
                <input type="text" class="w-full rounded border-blue-500" name="nombre_user" id="nombre_user" placeholder="User name"> 
            </div>
            <div class="mb-4">
                <input type="email" class="w-full rounded border-blue-500" name="email" id="email" placeholder="Correo"> 
            </div>
            <div class="mb-5">
                <input type="password" class="w-full rounded border-blue-500" name="pass" id="pass" placeholder="Contraseña"> 
            </div>
            <div class="mb-5">
                <input type="password" class="w-full rounded border-blue-500" name="pass_c" id="pass_c" placeholder="Confirmar Contraseña"> 
            </div>
            <div class="text-center mb-4">
                <button class="bg-blue-600 p-2 w-full font-semibold rounded  text-white" type="submit">Registrarse</button>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php echo constant('url'); ?>public/js/main.js?=1.0001"></script>

</body>
</html>
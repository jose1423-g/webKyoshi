<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in - Kyoshi</title>
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
        <div></div>
    </header>    
    
    <div class="mt-20 p-2 flex justify-center">
        <form class="bg-white w-96 rounded p-3 shadow-lg" action="" method="POST" id="">
            <div class="mb-5 text-center">
                <h1 class="text-3xl font-bold text-blue-600">Log in</h1>
            </div>
            <div class="mb-5">
                <label class="block mb-2 font-semibold" for="email">Email/User</label>
                <input type="email" class="w-full rounded border-blue-500" name="email" id="email" autocomplete="on" placeholder="Correo/User"> 
            </div>
            <div class="mb-5">
                <label class="block mb-2 font-semibold" for="pass">Password</label>
                <input type="password" class="w-full rounded border-blue-500" name="pass" id="pass" autocomplete="on" placeholder="Password"> 
            </div>
            <div class="text-center mb-5">
                <button class="hover:bg-blue-500  w-40 font-semibold bg-blue-600 p-2 rounded text-white" type="submit">Iniciar Sesíon</button>
            </div>
            <div class="text-center">
                <a class="text-blue-600 font-semibold" href="<?php echo constant('url')?>registro/">Registrarse</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php echo constant('url'); ?>public/js/main.js?=1.0001"></script>

</body>
</html>
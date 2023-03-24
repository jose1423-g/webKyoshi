<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <!-- tailwind --> 
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- fontawesome --> 
    <script src="https://kit.fontawesome.com/1163d1da29.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('url');?>public/css/style.css">
</head>
<body>
    
    <?php  include './view/components/header.php';?>

    <div id="elementos">

    </div>

    <div class="shadow-md p-4 bg-white">
        <div class="flex items-center h-96">
            <div class="w-1/2 flex justify-center">
                <div class="w-96">
                    <h1 class="mb-3 text-6xl font-semibold" id="Titulo"></h1>
                    <h3 class="font-medium text-lg" id="Contenido">
                    </h3>
                </div>
            </div>
            <div class="flex justify-center w-1/2">
                <div class="w-96" id="content-img">
                </div>
            </div>   
        </div>
    </div>

    <main class="mt-3 text-lg">

        <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
            <div class="w-1/2 mb-4 p-2 border-b-2">
                <h2 class="text-5xl font-semibold mb-3" id="Titulo2"></h2>
                <p id="Contenido2">
                </p>
            </div>
            <div>
                <ul class="font-semibold flex mb-3">
                    <li class="mx-2 hover:text-blue-600"><a href="#">Preguntas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="#">Diagramas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="#">Mapas cognitivos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="#">Estrategias grupales</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <div class="mb-2">
                        <h3 class="text-3xl font-semibold mb-2">Titulo dinamico</h3>
                        <button class="p-1 bg-blue-600 rounded-md text-white font-semibold">Explorar más</button>
                    </div>
                    <div class="p-4" id="">
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- planes -->
        <div class="container mx-auto mb-16 shadow-lg p-4 rounded-md bg-white">
            <div class="flex justify-around items-center h-96">
                <div class="w-96">
                    <h2 class="text-5xl font-semibold mb-3" id="Titulo">Premium</h2>
                    <p class="mb-3" id="Contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iste rem quae dolorem sint suscipit labore ad consectetur architecto! Odio ducimus unde itaque atque corporis at mollitia dolores earum similique.</p>
                    <button class="p-2 bg-blue-600 rounded-md text-white font-semibold">Ver los Planes</button>
                </div>
                <div class="flex justify-center w-96">
                    <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                </div>
            </div>
        </div>

        <!-- Recursos -->
        <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
            <div class="w-1/2 mb-2 px-2">
                <h2 class="text-5xl font-semibold mb-3" id="Titulo">Recursos</h2>
                <p id="Contenido">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione placeat, tenetur nesciunt animi natus nam laudantium in laboriosam distinctio adipisci possimus totam, blanditiis fuga aliquam? Esse repellendus vero doloremque eligendi.
                </p>
            </div>
            <div class="">
                <ul class="font-semibold flex mb-2" id="Titulo">
                    <!-- Obtener los li con php  -->
                    <li class="mx-2 hover:text-blue-600"><a href="">Plantillas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">eBooks</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Guias de Practica</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Casos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Infografias</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <!-- contenido dinamico -->
                    <div class="mb-2">
                        <h3 class="text-3xl font-semibold mb-2" id="Titulo"></h3>
                        <!-- btn generado con php con la ruta -->
                        <button class="p-1 bg-blue-600 rounded-md text-white font-semibold">Explorar más</button>
                    </div>
                    <div class="p-4" id="">
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                        <h1>Contenido dinamico</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tienda -->
        <div class="container mx-auto mb-16 shadow-lg p-4 rounded-md bg-white">
            <div class="flex justify-around items-center h-96">
                <div class="w-96">
                    <h2 class="text-5xl font-semibold mb-3" id="Titulo">Tienda</h2>
                    <p class="mb-3" id="Contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iste rem quae dolorem sint suscipit labore ad consectetur architecto! Odio ducimus unde itaque atque corporis at mollitia dolores earum similique.</p>
                    <button class="p-2 bg-blue-600 rounded-md text-white font-semibold">Comprar ahora</button>
                </div>
                <div class="flex justify-center w-96">
                    <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                </div>
            </div>
        </div>

        <!-- Aprende con las estartegias -->


    </main>




    <?php  include './view/components/footerIndex.php';?>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php echo constant('url'); ?>public/js/main.js?=1.0001"></script>

</body>
</html>
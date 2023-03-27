    <?php  include './view/components/header.php';?>

    <div class="w-full mb-16 shadow-lg p-4 rounded-md bg-white">
        <div class="flex justify-around items-center p-2 h-96">
            <div class="w-96">
                <h2 class="text-6xl font-semibold mb-3" id="Titulo"></h2>
                <p class="font-semibold" id="Contenido"></p>
            </div>
            <div class="flex justify-center w-96" id="content-img">
            </div>
        </div>
    </div>

    <main class="mt-4 text-lg">
        <!-- PREGUNTAS -->
        <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
            <div class="w-1/2 mb-4 p-2  border-b border-blue-500">
                <h2 class="text-5xl font-semibold mb-4" id="Titulo2"></h2>
                <p id="Contenido2"></p>
            </div>
            <div>
                <ul class="font-semibold flex mb-3">
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Preguntas">Preguntas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Diagramas">Diagramas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Mapas cognitivos">Mapas cognitivos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="#">Estrategias grupales</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <div class="mb-4">
                        <h3 class="text-3xl font-semibold mb-4">Titulo dinamico</h3>
                        <button class="p-1 bg-blue-600 rounded text-white font-semibold">Explorar más</button>
                    </div>

                    <div class="p-4 flex border-t" id="">

                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="https://www.kibocompany.com/wp-content/uploads/2020/03/Tiempo-de-preguntas-01-400x400.jpg" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">holas</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>

                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="HOLa" height="50px">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3" id="">Titulo</h1>
                                <button class="p-1 bg-blue-600 w-full rounded text-white font-semibold">Explorar más</button>
                            </div>
                        </div>

                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="HOLa" height="50px">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3" id="">Titulo</h1>
                                <button class="p-1 bg-blue-600 w-full rounded text-white font-semibold">Explorar más</button>
                            </div>
                        </div>

                        <div class="bg-white rounded shadow-lg w-72">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="HOLa" height="50px">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3" id="">Titulo</h1>
                                <button class="p-1 bg-blue-600 w-full rounded text-white font-semibold">Explorar más</button>
                            </div>
                        </div>
                    
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
                    <button class="p-1 bg-blue-600 rounded text-white font-semibold">Ver los Planes</button>
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

                    <li class="mx-2 hover:text-blue-600"><a href="">Plantillas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">eBooks</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Guias de Practica</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Casos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Infografias</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <!-- contenido dinamico -->
                    <div class="mb-2">
                        <h3 class="text-3xl font-semibold mb-4" id="Titulo">HOLIS</h3>

                        <button class="p-1 bg-blue-600 rounded text-white font-semibold">Explorar más</button>
                    </div>
                    <div class="p-4 flex border-t" id="">

                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">holas</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>

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

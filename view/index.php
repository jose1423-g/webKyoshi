    <?php  include './view/components/header.php';?>

    <div class="block shadow-lg w-full mb-16 p-3 lg:p-4 lg:flex justify-center items-center rounded-md bg-white">    
        <div class="lg:w-1/2 max-lg:mb-3">
            <h2 class="text-6xl font-semibold mb-4" id="Titulo1"></h2>
            <p class="font-semibold mb-4" id="Contenido1"></p>
            <button class="p-2 w-40 bg-blue-600 rounded-md text-white text-base font-semibold max-lg:hidden">Empezar</button>
        </div>
        <div class="flex justify-center mb-4" id="content-img1"></div>
        <button class="p-2 mb-2 w-full bg-blue-600 rounded-md text-white text-base font-semibold lg:hidden">Empezar</button>
    </div>

    <main class="mt-4 text-lg">
        <!-- EXPLORA -->
        <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
            <div class="w-1/2 mb-4 p-2">
                <h2 class="text-5xl font-semibold mb-4" id="Titulo2"></h2>
                <p id="Contenido2"></p>
            </div>
            <div>
                <ul class="font-semibold flex mb-3 hidden">
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Preguntas">Preguntas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Diagramas">Diagramas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Mapas cognitivos">Mapas cognitivos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a class="contenido-dinamico pointer" data-id="Estrategias grupales">Estrategias grupales</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <div class="mb-4">
                        <h3 class="text-3xl font-semibold mb-4" id="">Titulo dinamico</h3>
                        <button class="p-1 bg-blue-600 rounded text-white font-semibold">Explorar más</button>
                    </div>
                    <div class="p-4 flex border-t" id="">
                        <!-- card -->
                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="https://www.kibocompany.com/wp-content/uploads/2020/03/Tiempo-de-preguntas-01-400x400.jpg" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">holas</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- planes -->
    <!--     <div class="container mx-auto mb-16 shadow-lg p-4 rounded-md bg-white">
            <div class="flex justify-around items-center h-96">
                <div class="w-96">
                    <h2 class="text-5xl font-semibold mb-3" id="Titulo3"></h2>
                    <p class="mb-3" id="Contenido3"></p>
                    <button class="p-1 bg-blue-600 rounded text-white font-semibold">Ver los Planes</button>
                </div>
                <div class="flex justify-center w-96" id="content-img3"></div>
            </div>
        </div> -->
        <div class="block shadow-lg container mx-auto mb-16 p-3 lg:p-4 lg:flex justify-center items-center rounded-md bg-white">    
            <div class="lg:w-1/2 max-lg:mb-3">
                <h2 class="text-6xl font-semibold mb-4" id="Titulo3"></h2>
                <p class="font-semibold mb-4" id="Contenido3"></p>
                <button class="p-2 w-40 bg-blue-600 rounded-md text-white text-base font-semibold max-lg:hidden">Ver los Planes</button>
            </div>
            <div class="flex justify-center mb-4" id="content-img3"></div>
            <button class="p-2 mb-2 w-full bg-blue-600 rounded-md text-white text-base font-semibold lg:hidden">Empezar</button>
        </div>

        <!-- Recursos -->
        <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
            <div class="w-1/2 mb-4 p-2">
                <h2 class="text-5xl font-semibold mb-4" id="Titulo4">Recursos</h2>
                <p id="Contenido4"></p>
            </div>
            <div class="">
                <ul class="font-semibold flex mb-3 hidden">
                    <li class="mx-2 hover:text-blue-600"><a href="">Plantillas</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">eBooks</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Guias de Practica</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Casos</a></li>
                    <li class="mx-2 hover:text-blue-600"><a href="">Infografias</a></li>
                </ul>
                <div class="p-4 rounded border">
                    <!-- contenido dinamico -->
                    <div class="mb-2">
                        <h3 class="text-3xl font-semibold mb-4" id="">Recursos</h3>
                        <button class="p-1 bg-blue-600 rounded text-white font-semibold">Explorar más</button>
                    </div>
                    <div class="p-4 flex border-t" id="">
                        <!-- card -->
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
                    <h2 class="text-5xl font-semibold mb-3" id="Titulo5"></h2>
                    <p class="mb-3" id="Contenido5"></p>
                    <button class="p-2 bg-blue-600 rounded-md text-white font-semibold">Comprar ahora</button>
                </div>
                <div class="flex justify-center w-96" id="content-img5">
                </div>
            </div>
        </div>

        <!-- Aprende con las estartegias -->


    </main>

    <?php  include './view/components/footerIndex.php';?>

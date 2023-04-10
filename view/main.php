<?php  include './view/components/header.php';?>
<!-- max-w-max -->
    <main class="flex overflow-x-hidden bg-white w-full">
        <aside class="bg-white w-80 fixed hidden lg:block lg:fixed top-20 z-20 overflow-y-scroll inset-0 max-lg:shadow-lg" id="drop-aside">
            <ul class="pl-4 py-4" id="aside-menu">
                <!-- <h1 class="text-blue-600 text-3xl font-bold mb-3">Contenido</h1> -->
                <h1 class="font-bold mb-3 text-blue-600">Conocimientos Previos</h1>
                <li class="aside-menu1"></li>
                
                <h1 class="font-bold mb-3 text-blue-600">Organizacion de informacion</h1>
                <li class="aside-menu2"></li>

                <h1 class="font-bold mb-3 text-blue-600">Estrategias grupales</h1>
                <li class="aside-menu3"></li>

                <h1 class="font-bold mb-3 text-blue-600">Desarrollo de competencias</h1>
                <li class="aside-menu4"></li>
            </ul>
        </aside>
        <div class="lg:ml-80 ml-0 overflow-x-hidden">
            <div class="flex max-lg:block lg:p-3 max-lg:w-screen w-full">
                <div class="p-3">
                    <h1 class="mb-8 text-5xl font-bold text-blue-600 max-lg:text-center" id="Titulo_main"></h1>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-600 font-bold" id="Que_es"></h1>
                        <p id="Que_es_c"></p>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-600 font-bold" id="Como_se"></h1>
                        <ol class="list-disc pl-6" id="Como_se_li">
                            
                        </ol>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500 font-bold" id="Para_que"></h1>
                        <h2 class="font-bold text-blue-600 mb-6" id="sub_para_que"></h2>
                        <p id="para_que_c"></p>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-600 font-bold">Ejemplos</h1>
                        <div id="main_img">

                        </div>
                    </div>
                </div>

                <!-- video -->
                <aside class="w-1/2 p-2 max-lg:mb-20  max-lg:w-screen" id="aside_video">
                    <h1 class="text-2xl mb-6 text-blue-600 font-bold">Videos</h1>
                    <iframe
                        width="100%" 
                        height="290" 
                         
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </aside>
                
            </div>
            <div class="p-4">
                <div class="mb-20">
                    <h1 class="text-2xl mb-6 text-blue-600 font-bold">Herramientas</h1>
                </div> 
                <div class="mb-20">
                    <h1 class="text-2xl mb-6 text-blue-600 font-bold">Fuentes</h1>
                </div>
            </div>
        </div>


    





    </main>

    <?php  include './view/components/footer.php';?>



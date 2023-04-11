<?php  include './view/components/header.php';?>
<!-- max-w-max -->
    <main class="flex overflow-x-hidden bg-white w-full">
        <aside class="bg-white w-80 fixed hidden lg:block lg:fixed top-20 z-20 overflow-y-scroll inset-0 max-lg:shadow-lg" id="drop-aside">
            <ul class="pl-5 py-4" id="aside-menu">
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
            <div class="flex max-xl:block lg:p-3 max-lg:w-screen w-full">
                <div class="p-3">
                    <h1 class="mb-8 text-5xl font-bold text-blue-600 max-lg:text-center" id="Titulo_main"></h1>
                    
                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Que_es"></h1>
                        <p id="Que_es_c"></p>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Como_se"></h1>
                        <ul class="list-disc pl-4 leading-7" id="Como_se_li"></ul>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Para_que"></h1>
                        <h2 class="text-xl font-bold text-blue-600 mb-4" id="sub_para_que"></h2>
                        <ul class="list-disc pl-4 leading-6" id="para_que_c"></ul>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold">Ejemplos</h1>
                        <div class="cursor-pointer" id="main_img">
                        </div>
                    </div>
                </div>
                <!-- video -->
                <aside class="w-1/2 p-2 max-lg:mb-12 max-lg:w-screen">
                    <h1 class="text-3xl mb-4 text-blue-600 font-bold">Videos</h1>
                    <div id="aside_video">

                    </div>
                </aside> 
            </div>
            <div class="p-5">
                <div class="mb-10">
                    <h1 class="text-2xl mb-4 text-blue-600 font-bold">Herramientas</h1>
                </div> 
                <div class="mb-10">
                    <h1 class="text-2xl mb-4 text-blue-600 font-bold">Fuentes</h1>
                </div>
            </div>
        </div>    
    </main>

    <?php  include './view/components/footer.php';?>



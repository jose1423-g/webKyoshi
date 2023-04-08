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
            <div class="flex max-lg:block lg:p-4 max-lg:w-screen">
                <div class="p-3">
                    <h1 class="mb-8 text-5xl font-bold text-blue-600 max-lg:text-center">LLuvia de ideas</h1>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500 font-bold" id="">¿Qué es?</h1>
                        <p id="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut hic quaerat ratione nobis saepe earum exercitationem eligendi accusantium aperiam, laboriosam doloribus ipsa ad dolorem minima non sunt quas a? Quis!</p>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500 font-bold" id="">¿Cómo se realiza?</h1>
                        <ol class="list-disc pl-6" id="">
                            <li>Se parte de una pregunta central acerca de un tema, una situación o un problema.</li>
                        </ol>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500 font-bold">¿Para qué se utiliza?</h1>
                        <h2>La técnica clasica de la lluvia de ideas</h2>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500 font-bold">Ejemplos</h1>
                        <img src="../public/img_ejemplos/lluvia-de-ideas.png" alt="Lluvia de ideas">
                    </div>
                </div>

                <!-- video -->
                <aside class="w-96 p-2 max-lg:mb-20  max-lg:w-screen">
                    <h1 class="text-2xl mb-6 text-blue-500 font-bold">Videos</h1>
                    <iframe 
                        width="100%" 
                        height="290" 
                        src="https://www.youtube.com/embed/GEo7W-uJNkc" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>

                   <!--  <iframe 
                        width="260px" 
                        height="160px" 
                        src="https://www.youtube.com/embed/YPTYQ3yrpHw" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe> -->

                </aside>
                
            </div>
            <div class="p-4">
                <div class="mb-20">
                    <h1 class="text-2xl mb-6 text-blue-500 font-bold">Herramientas</h1>
                </div> 
                <div class="mb-20">
                    <h1 class="text-2xl mb-6 text-blue-500 font-bold">Fuentes</h1>
                </div>
            </div>
        </div>


    





    </main>

    <?php  include './view/components/footer.php';?>



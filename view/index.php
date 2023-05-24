<?php  include './view/components/header.php';?>

    <?php while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)){
            if ($row['indexId'] == 2) {//bienvenida
                $titulo_inicio =  $row['Titulo'];
                $contenido_inicio = $row['Contenido'];
                $img_inicio = $row['Img'];
            } elseif ($row['indexId'] == 4){//explora
                $titulo_explora =  $row['Titulo'];
                $contenido_explora = $row['Contenido'];
                $img_explora = $row['Img'];
            } elseif ($row['indexId'] == 5){//por que ser premium
                $titulo_premium =  $row['Titulo'];
                $contenido_premium = $row['Contenido'];
                $img_premium = $row['Img'];
            } elseif ($row['indexId'] == 6){//recursos
                $titulo_recursos =  $row['Titulo'];
                $contenido_recursos = $row['Contenido'];
                $img_recursos = $row['Img'];
            } elseif ($row['indexId'] == 7){//tienda
                $titulo_tienda =  $row['Titulo'];
                $contenido_tienda = $row['Contenido'];
                $img_tienda = $row['Img'];
            }
        }?> 
        <div class="w-80 bg-white overflow-y-scroll inset-0 hidden fixed top-20 z-40 lg:hidden" id="drop-aside">
            <?php  require_once './view/components/aside.php' ?>
        </div>
        <div class="block shadow-lg w-full mb-16 p-3 lg:p-4 lg:flex justify-center items-center rounded-md bg-white">    
            <div class="lg:w-1/2 max-lg:mb-3">
                <h2 class="font-semibold mb-4 lg:text-6xl max-lg:text-5xl max-lg:text-center" id="Titulo1"><?php echo $titulo_inicio; ?></h2>
                <p class="font-semibold mb-4" id="Contenido1"><?php  echo $contenido_inicio;?></p>
                <button class="p-2 w-40 bg-blue-600 rounded-md text-white text-base font-semibold max-lg:hidden btn-main">Empezar</button>
            </div>
            <div class="flex justify-center mb-4">
                <img class="min-w-3xl lg:max-w-md" src="<?php  echo $img_inicio;?>" alt="">
            </div>
            <button class="p-2 mb-2 w-full bg-blue-600 rounded-md text-white text-base font-semibold lg:hidden btn-main">Empezar</button>
        </div>

        <main class="mt-4 text-lg">
            <!-- EXPLORA -->
            <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
                <div class="w-4/6 max-lg:w-full mb-4 p-2">
                    <h2 class="text-5xl font-semibold mb-4 max-lg:text-center"><?php echo $titulo_explora ?></h2>
                    <p><?php echo $contenido_explora; ?></p>
                </div>
                <div class="max-lg:hidden">
                    <ul class="font-semibold flex mb-3">
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_explora" data-id="preguntas">Preguntas</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_explora" data-id="diagrama">Diagramas</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_explora" data-id="Mapascognitivos">Mapas cognitivos</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_explora" data-id="Estrategiasgrupales">Estrategias grupales</a></li>
                    </ul>
                    <div class="p-4 flex justify-center rounded border explora"></div>
                </div>
                <!-- contenido mobil -->
                <div class="flex justify-center flex-wrap border-t border-blue-600 lg:hidden explora"></div>
            </div><!-- div principal -->

            <!-- PREMIUM -->
            <div class="block shadow-lg container mx-auto mb-16 p-3 lg:p-4 lg:flex justify-center items-center rounded-md bg-white">    
                <div class="lg:w-1/2 max-lg:mb-3">
                    <h2 class="font-semibold mb-4 lg:text-6xl max-lg:text-5xl max-lg:text-center" id="Titulo3"><?php echo $titulo_premium; ?></h2>
                    <p class="font-semibold mb-4"><?php echo $contenido_premium; ?></p>
                    <button class="p-2 w-40 bg-blue-600 rounded-md text-white text-base font-semibold max-lg:hidden">Ver los Planes</button>
                </div>
                <div class="flex justify-center mb-4">
                    <img class="min-w-3xl lg:max-w-md" src="<?php echo $img_premium; ?>" alt="">
                </div>
                <button class="p-2 mb-2 w-full bg-blue-600 rounded-md text-white text-base font-semibold lg:hidden">ver los planes</button>
            </div>

            <!-- RECURSOS -->
            <div class="container mx-auto mb-16 p-2 rounded bg-white shadow-lg">
                <div class="w-4/6 max-lg:w-full mb-4 p-2">
                    <h2 class="text-5xl font-semibold mb-4 max-lg:text-center" id="Titulo4"><?php echo $titulo_recursos ?></h2>
                    <p><?php echo $contenido_recursos; ?></p>
                </div>
                <div class="max-lg:hidden">
                    <ul class="font-semibold flex mb-3">
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_recursos" data-id="plantillas">Plantillas</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_recursos" data-id="eBooks">eBooks</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_recursos" data-id="Guias_de_practica">Guias de Practica</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_recursos" data-id="Casos">Casos</a></li>
                        <li class="mx-2 hover:text-blue-600"><a class="pointer search_recursos" data-id="infografias">Infografias</a></li>
                    </ul>
                    <div class="flex justify-center p-4 rounded border">
                        <!-- card -->
                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">Cuadro comparativo</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">Diagrama radial</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">Diagrama de árbol</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>
                        <div class="bg-white rounded shadow-lg w-72 mr-3">
                            <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
                            <div class="block p-2">  
                                <h1 class="text-2xl font-semibold mb-3">Diagrama de flujo</h1>
                                <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  contenido mobil -->
                <div class="flex justify-center flex-wrap border-t border-blue-600 lg:hidden">
                    <div class="bg-white rounded shadow-lg w-64 mb-4 mx-3 mt-2">
                        <img class="w-full" src="<?php echo constant('url') ?>public/img/premium.png" alt="Preguntas">
                        <div class="block p-2">  
                            <h1 class="text-2xl font-semibold mb-3">Plantillas</h1>
                            <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-lg w-64 mb-4 mx-3">
                        <img class="w-full" src="<?php echo constant('url') ?>public/img/premium.png" alt="Preguntas">
                        <div class="block p-2">  
                            <h1 class="text-2xl font-semibold mb-3">eBooks</h1>
                            <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-lg w-64 mb-4 mx-3">
                        <img class="w-full" src="<?php echo constant('url') ?>public/img/premium.png" alt="Preguntas">
                        <div class="block p-2">  
                            <h1 class="text-2xl font-semibold mb-4">Guias de Practica</h1>
                            <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-lg w-64 mb-4 mx-3<">
                        <img class="w-full" src="<?php echo constant('url') ?>public/img/premium.png" alt="Preguntas">
                        <div class="block p-2">  
                            <h1 class="text-2xl font-semibold mb-3">Casos</h1>
                            <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                        </div>
                    </div>
                    <div class="bg-white rounded shadow-lg w-64 mb-4 mx-3<">
                        <img class="w-full" src="<?php echo constant('url') ?>public/img/premium.png" alt="Preguntas">
                        <div class="block p-2">  
                            <h1 class="text-2xl font-semibold mb-3">Infografias</h1>
                            <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
                        </div>
                    </div>
                </div>
            </div><!-- div principal -->

            <!-- TIENDA -->
            <div class="block shadow-lg container mx-auto mb-16 p-3 lg:p-4 lg:flex justify-center items-center rounded-md bg-white">    
                <div class="lg:w-1/2 max-lg:mb-3">
                    <h2 class="font-semibold mb-4 lg:text-6xl max-lg:text-5xl max-lg:text-center" id="Titulo5"><?php echo $titulo_tienda; ?></h2>
                    <p class="font-semibold mb-4"><?php echo $contenido_tienda; ?></p>
                    <button class="p-2 w-40 bg-blue-600 rounded-md text-white text-base font-semibold max-lg:hidden">Comprar ahora</button>
                </div>
                <div class="flex justify-center mb-4" id="content-img5">
                    <img  class="min-w-3xl lg:max-w-md" src="<?php echo $img_tienda; ?>" alt="">
                </div>
                <button class="p-2 mb-2 w-full bg-blue-600 rounded-md text-white text-base font-semibold lg:hidden">Comprar ahora</button>
            </div>

            <!-- Aprende con las estartegias -->
        </main>
    <?php  include './view/components/footerIndex.php';?>

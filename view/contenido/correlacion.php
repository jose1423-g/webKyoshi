<?php  include './view/components/header.php';?>
<!-- max-w-max -->
    <main class="flex overflow-x-hidden bg-white w-full">
        <aside class="bg-white w-80 fixed hidden lg:block lg:fixed top-20 z-20 overflow-y-scroll inset-0 max-lg:shadow-lg" id="drop-aside">
            <?php  require_once './view/components/aside.php' ?>
        </aside>
        <div class="lg:ml-80 ml-0 overflow-x-hidden">
        <?php while ($row = mysqli_fetch_array($resp)) { ?>

            <div class="flex max-xl:block lg:p-3 max-lg:w-screen w-full">
                <div class="p-3">
                    <h1 class="mb-8 text-5xl font-bold text-blue-600 max-lg:text-center"><?php  echo $row['Titulo']; ?></h1>
                    
                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Que_es"><?php echo $row['Que']; ?></h1>
                        <p id="Que_es_c"><?php echo $row['Que_es']; ?></p>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Como_se"><?php echo $row['Como']; ?></h1>
                        <ul class="list-disc pl-4 leading-7" id="Como_se_li"><?php echo $row['Como_se']; ?></ul>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold" id="Para_que"><?php echo $row['Para']; ?></h1>
                        <h2 class="text-xl font-bold text-blue-600 mb-4" id="sub_para_que"><?php echo $row['sub_para_que'] ?></h2>
                        <ul class="list-disc pl-4 leading-6" id="para_que_c"><?php echo $row['Para_que']; ?></ul>
                    </div>

                    <div class="mb-10 max-w-7xl">
                        <h1 class="text-3xl mb-4 text-blue-600 font-bold">Ejemplos</h1>
                        <img src="<?php  echo constant('url').$row['ruta_img'] ?>" alt="">
                    </div>
                </div>
                <!-- video -->
                <aside class="w-1/2 p-2 max-lg:mb-12 max-lg:w-screen">
                    <h1 class="text-3xl mb-4 text-blue-600 font-bold">Videos</h1>
                    <iframe 
                    width="290" 
                    height="250" 
                    src="<?php echo $row['ruta_video']; ?>" 
                    title="YouTube video player"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen></iframe>
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
            
        <?php } ?>
        </div>    
    </main>    
<?php  include './view/components/footer.php';?>
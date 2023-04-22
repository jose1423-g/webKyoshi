<?php require_once './view/components/header.php' ?>


<div class="flex justify-start items-center bg-blue-700 max-lg:p-5 max-md:h-max p-4 md:h-96">    
    <div class="lg:ml-28 lg:w-2/3 max-lg:w-full">
        <h2 class="font-bold mb-6 text-5xl text-white"><?php echo 'Prepara tu clase como un profesional'; ?></h2>
        <p class="font-semibold mb-6 text-white text-2xl"><?php  echo 'Adquiere una membrecía premium para tener veneficios garantizados. Vamos que esperas y adquiere un plan ahora mismo.';?></p>
        <button class="p-2 w-40 bg-white rounded-md text-base font-semibold max-sm:w-full"><a href="#planes">VER PLANES</a></button>
    </div>
</div>

<main>
    <div class="bg-slate-100">
        <div class="container mx-auto py-10">
            <h2 class="font-bold mb-4 text-5xl text-center">¿Por que cambiarte a premium?</h2>
            <div class="flex justify-center flex-wrap mt-12">

                <div class="bg-white rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-60 p-5">
                    <img class="w-52 m-0" src="<?php echo constant('url') ?>public/img/icon-logo.png" alt="">
                    <div class="mt-5 text-center">       
                        <h1 class="font-bold mb-5">Accede a contenido ilimitado</h1>
                        <p>Explora las difrentes estrategias de enseñanza y aprendizaje</p>
                    </div>
                </div>

                <div class="bg-white rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-60 p-5">
                    <img class="w-52 m-0" src="<?php echo constant('url') ?>public/img/icon-logo.png" alt="">
                    <div class="mt-5 text-center">       
                        <h1 class="font-bold mb-5">Accede a contenido ilimitado</h1>
                        <p>Explora las difrentes estrategias de enseñanza y aprendizaje</p>
                    </div>
                </div>

                <div class="bg-white rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-60 p-5">
                    <img class="w-52 m-0" src="<?php echo constant('url') ?>public/img/icon-logo.png" alt="">
                    <div class="mt-5 text-center">       
                        <h1 class="font-bold mb-5">Accede a contenido ilimitado</h1>
                        <p>Explora las difrentes estrategias de enseñanza y aprendizaje</p>
                    </div>
                </div>

                <div class="bg-white rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-60 p-5">
                    <img class="w-52 m-0" src="<?php echo constant('url') ?>public/img/icon-logo.png" alt="">
                    <div class="mt-5 text-center">       
                        <h1 class="font-bold mb-5">Accede a contenido ilimitado</h1>
                        <p>Explora las difrentes estrategias de enseñanza y aprendizaje</p>
                    </div>
                </div>
            </div>   
        </div>
    </div>

    <div class="mt-5" id="planes">
        <h1 class="font-bold mb-10 text-5xl text-center">Elige tu plan</h1>
        <div class="flex justify-center flex-wrap mb-20">

            <div class="rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-72 p-5 bg-white">
                <div class="mb-4 pb-2 border-2 border-white border-b-blue-500">
                    <h1 class="font-semibold text-3xl mb-2 text-blue-600">Basico</h1>
                    <span>$99.00/mes</span>
                </div>
                <ul class="mb-5">
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                </ul>
                <button class="p-2 w-40 bg-blue-600 w-full rounded-md text-white text-base font-semibold"><a href="#">Empezar</a></button>
            </div>

            <div class="rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-72 p-5 bg-white">
                <div class="mb-4 pb-2 border-2 border-white border-b-blue-500">
                    <h1 class="font-semibold text-3xl mb-2 text-blue-600">Estandar</h1>
                    <span>$149.00/mes</span>
                </div>
                <ul class="mb-5">
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                </ul>
                <button class="p-2 w-40 bg-blue-600 w-full rounded-md text-white text-base font-semibold"><a href="#">Empezar</a></button>
            </div>

            <div class="rounded-sm shadow-md max-lg:my-3 sm:mx-3 w-72 p-5 bg-white">
                <div class="mb-4 pb-2 border-2 border-white border-b-blue-500">
                    <h1 class="font-semibold text-3xl mb-2 text-blue-600">Premium</h1>
                    <span>$199.00/mes</span>
                </div>
                <ul class="mb-5">
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                    <li><span class="fa-solid fa-check mr-2"></span></li>
                </ul>
                <button class="p-2 w-40 bg-blue-600 w-full rounded-md text-white text-base font-semibold"><a href="#">Empezar</a></button>
            </div>
        </div>
    </div>

</main>

<?php require_once './view/components/footerindex.php' ?>
    
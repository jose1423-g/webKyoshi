<?php  include './view/components/header.php';?>
<div class="w-80 bg-white overflow-y-scroll inset-0 hidden fixed top-20 z-40 lg:hidden" id="drop-aside">
    <?php  require_once './view/components/aside.php' ?>
</div>

<main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-blue-600"></p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Lo sentimos la informacion aun no esta disponible</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Gracias por su compresion vuelva pronto</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="<?php echo constant('url'); ?>" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
            </div>
        </div>
    </main>

<?php  include './view/components/footerIndex.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
     <!-- tailwind --> 
     <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- fontawesome --> 
    <script src="https://kit.fontawesome.com/1163d1da29.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo constant('url');?>public/css/style.css">
</head>
<body>
    
    <?php  include './view/components/header.php';?>

    <main class="flex max-w-max bg-white">
        <aside class="bg-white w-80 hidden fixed lg:block lg:fixed top-20 z-20 overflow-y-scroll inset-0" id="">
            <ul class="pl-4 py-4" id="aside-menu">
            <li class="mb-3"><a class="hover:text-blue-600" href="http://localhost/webkyoshi/main/lluvia-de-ideas">LLuvia de ideas</a></li>
            <li class="mb-3"><a class="hover:text-blue-600" href="http://localhost/webkyoshi/main/sqa">sqa (qué sé, qué quiero saber, qué aprendí)</a></li>
            </ul>
        </aside>
        <div class="lg:ml-80">
            <div class="flex">
                <div class="px-8 py-4">
                    <h1 class="mb-8 text-5xl font-bold text-blue-600">LLuvia de ideas</h1>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">¿Qué es?</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut hic quaerat ratione nobis saepe earum exercitationem eligendi accusantium aperiam, laboriosam doloribus ipsa ad dolorem minima non sunt quas a? Quis!</p>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">¿Cómo se realiza?</h1>
                        <ol class="list-disc pl-6">
                            <li>Se parte de una pregunta central acerca de un tema, una situación o un problema.</li>
                        </ol>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">¿Para qué se utiliza?</h1>
                        <h2>La técnica clasica de la lluvia de ideas</h2>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">Ejemplos</h1>
                        <img src="" alt="Lluvia de ideas">
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">Herramientas</h1>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">Te puede interesar</h1>
                    </div>
                    <div class="mb-20">
                        <h1 class="text-2xl mb-6 text-blue-500">Fuentes</h1>
                    </div>
                </div>

                <aside class="w-96 py-4 pr-3">
                    <h1 class="text-2xl mb-6 text-blue-500">Videos</h1>
                    <iframe width="260" height="160" src="https://www.youtube.com/embed/GEo7W-uJNkc" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                    encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </aside>

            </div>
        </div>
    </main>

    <!-- 
        Posibles login
        cifraclud
        plazit
        udemy
        huawei
     -->



    <?php  include './view/components/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="<?php echo constant('url'); ?>public/js/main.js?=1.0001"></script>

</body>
</html>
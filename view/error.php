<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
    
    <main class="grid min-h-full place-items-center bg-white py-24 px-6 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-base font-semibold text-blue-600">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
            <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldnt find the page youre looking for.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="<?php echo constant('url'); ?>main/lluvia_de_ideas" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
            </div>
        </div>
    </main>
    
</body>
</html>
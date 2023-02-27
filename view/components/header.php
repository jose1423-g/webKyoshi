<header class="bg-white sticky top-0 box-border shadow-md">
    <div class="mx-auto p-5">
        <div class="flex justify-between items-center">
            <div class="flex justify-start items-center">    
                <div class="flex mr-3">
                    <a href="<?php  echo constant('url'); ?>">
                        <img src="<?php echo constant('url');?>public/img/icon-logo.png" alt="Logo" width="35px" height="auto">
                    </a>
                </div>
                <ul class="flex font-semibold text-base">
                    <li class="mx-3"><a class="hover:text-blue-600" id="toggle-menu" href="#">Recursos</a>
                        <ul class="bg-white p-3 absolute top-14 dropdown-menu shadow-md rounded hidden">
                            <li class=""><a class="hover:text-blue-600" href="#">Plantillas</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">eBook</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">Guias de practica</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">Casos</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">Casos</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">Infografias</a></li>
                            <li class=""><a class="hover:text-blue-600" href="#">Rubricas</a></li>
                        </ul>
                    </li>
                    <li class="mx-3"><a class="hover:text-blue-600" href="#">Contenido</a></li>
                    <li class="mx-3"><a class="hover:text-blue-600" href="#">Tienda</a></li>
                </ul>
            </div>
            <div class="">
                <button type="button" class="mr-3" id="icon-search"><span class="fa-sharp fa-solid fa-magnifying-glass text-lg"></span></button>
                <button type="button" class="mr-3" id=""><span class="fa-sharp fa-solid fa-cart-shopping text-lg"></span></button>
                <button type="button" class="mr-2 font-semibold rounded-md p-2 hover:text-blue-600" id="btn-inicio">Iniciar sesión</button>
                <button type="button" class="text-white font-semibold bg-blue-600 rounded-md p-2" id="btn-registro">Regístrate</button>
            </div>
        </div>    
    </div>
</header>

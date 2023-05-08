<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de visitas</title>

    <link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app//app.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://flowbite-admin-dashboard.vercel.app/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://flowbite-admin-dashboard.vercel.app/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://flowbite-admin-dashboard.vercel.app/favicon-16x16.png">
    <link rel="icon" type="image/png" href="https://flowbite-admin-dashboard.vercel.app/favicon.ico">
    <link rel="manifest" href="https://flowbite-admin-dashboard.vercel.app/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite-admin-dashboard.vercel.app/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- para el css/ en esta version de laravel con el archivo vite.config,js -->
    
    <script>
        
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body>
    <header class="w-full bg-white dark:bg-gray-100 rounded shadow-lg py-4 px-7">
        <div class="">
            <nav class="flex justify-between">
            <div class="flex items-center space-x-3 lg:pr-16 pr-6">
                <img src="img/escudo.png" class="mr-3 h-12 sm:h-9" alt="Flowbite Logo" />
                <h2 class="font-extrabold text-2xl leading-6 text-sky-700">Registro de Visitas</h2>
            </div>
            <nav class="flex flex-wrap items-center justify-center pl-6 ml-6 text-base border-l border-gray-200 md:mr-auto">
                
            
            <!-- For medium and plus sized devices -->
            <ul class="hidden md:flex flex-auto space-x-2">
                <li onclick="selected()" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-xs leading-3 shadow-md rounded">Inicio</li>
                <li onclick="selected()" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-xs leading-3 shadow-md rounded">Información</li>
                <li onclick="selected()" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-gray-600 border border-white bg-gray-50 cursor-pointer px-3 py-2.5 font-normal text-xs leading-3 shadow-md rounded">Contacto</li>
            </ul>
            </nav>
            <div class="flex space-x-5 justify-center items-center pl-2">
                <a href="#_"
                    class="px-4 py-2 text-xs font-bold text-white uppercase transition-all duration-150 bg-sky-700 rounded shadow outline-none active:bg-sky-700 hover:shadow-md focus:outline-none ease">
                    Ingresar
                </a>
            </div>
            </nav>
            
            <!-- for smaller devcies -->
            <div class="block md:hidden w-full mt-5">
                <div onclick="selectNew()" class="cursor-pointer px-4 py-3 text-white bg-indigo-600 rounded flex justify-between items-center w-full">
                <div class="flex space-x-2">
                    <span id="s1" class="font-semibold text-sm leading-3 hidden">Selected: </span>
                    <p id="textClicked" class="font-normal text-sm leading-3 focus:outline-none hover:bg-gray-800 duration-100 cursor-pointer">Collections</p>
                </div>
                <img id="ArrowSVG" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-1-svg4.svg" alt="down arrow" class="rotate-180 transform" />
                </div>
                <div class="relative">
                <ul id="list" class="hidden font-normal text-base leading-4 absolute top-2 w-full rounded shadow-md z-20">
                    <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Inicio</li>
                    <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Información</li>
                    <li onclick="selectedSmall()" class="px-4 py-3 text-gray-600 bg-gray-50 border border-gray-50 focus:outline-none focus:bg-gray-100 hover:bg-gray-100 duration-100 cursor-pointer text-xs leading-3 font-normal focus:text-black">Contacto</li>
                </ul>
                </div>
            </div>
        </div>
          <script>
            function selected() {
            var targeted = event.target;
            var clicked = targeted.parentElement;

            var child = clicked.children;
            console.log(child);

            for (let i = 0; i < child.length; i++) {
                if (child[i].classList.contains("text-white")) {
                console.log(child[i]);
                child[i].classList.remove("text-white", "bg-indigo-600");
                child[i].classList.add("text-gray-600", "bg-gray-50", "border", "border-white");
                }
            }

            targeted.classList.remove("text-gray-600", "bg-gray-50", "border", "border-white");
            targeted.classList.add("text-white", "bg-indigo-600");
            }

            function selectNew() {
            var newL = document.getElementById("list");
            newL.classList.toggle("hidden");

            document.getElementById("ArrowSVG").classList.toggle("rotate-180");
            }

            function selectedSmall() {
            var targeted = event.target;
            var clicked = targeted.parentElement;

            var child = clicked.children;

            for (let i = 0; i < child.length; i++) {
                if (child[i].classList.contains("text-white")) {
                child[i].classList.remove("bg-indigo-600");
                child[i].classList.add("text-gray-600", "bg-gray-50", "border", "border-white");
                }
            }

            targeted.classList.remove("text-gray-600", "bg-gray-50", "border", "border-white");

            document.getElementById("s1").classList.add("hidden");
            document.getElementById("textClicked").innerHTML = targeted.innerHTML;
            // close dropdown
            var newL = document.getElementById("list");
            newL.classList.toggle("hidden");
            document.getElementById("ArrowSVG").classList.toggle("rotate-180");
            }

          </script>
    </header>
    {{-- <header>
        <nav class=" shadow transition fixed z-20 w-full border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-[rgb(232,247,255)]">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a class="flex items-center">
                    <img src="img/escudo.png" class="mr-3 h-12 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-sky-700">Sistema de visitas</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <!-- <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Ingresar</a> -->
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-white-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registro de Visitas</a>
                            @else
                            <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 rounded">                                   
                                <a href="{{ route('login') }}" >Ingresar <span aria-hidden="true">&rarr;</span></a>
                            </button>
                            
                                <!-- <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 rounded">                                   
                                    <a href="{{ route('login') }}" >Ingresar <span aria-hidden="true">&rarr;</span></a>
                                </button> -->
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a class="block py-2 pr-4 pl-3 text-sky-700 rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-sky-700" aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a class="block py-2 pr-4 pl-3 text-sky-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Información</a>
                        </li>
                        <li>
                            <a class="block py-2 pr-4 pl-3 text-sky-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0  lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}

    <main class="w-full h-full">
        <div class="w-full">
            @yield('content')
        </div>

    </main>

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <footer class="relative dark:bg-[rgb(47,117,179)] pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-extrabold dark:text-white">Gobierno Regional de Puno</h4>
                <h5 class="text-lg mt-0 mb-2 text-white">
                "Trabajando por un Futuro Mejor 2023-2026"
                </h5>
                <div class="mt-6 lg:mb-0 mb-6">
                <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                    <i class="fab fa-github"></i>
                </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                <div class="w-full lg:w-4/12 px-4 ml-auto">
                    <span class="block uppercase dark:text-white text-sm font-semibold mb-2">Useful Links</span>
                    <ul class="list-unstyled">
                    <li>
                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">About Us</a>
                    </li>
                    <li>
                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Blog</a>
                    </li>
                    <li>
                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Github</a>
                    </li>
                    <li>
                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="#">Free Products</a>
                    </li>
                    </ul>
                </div>
                
                </div>
            </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-white font-semibold py-1">
                Copyright © <span id="get-current-year">2023</span><a href="https://www.regionpuno.gob.pe/gobierno-regional-puno/" class="text-white hover:text-white" target="_blank"> Gobierno Regional de Puno
                <a class="text-white hover:text-blueGray-800">System</a>.
                </div>
            </div>
            </div>
        </div>
    </footer>

    
    
</body>
  
</html>
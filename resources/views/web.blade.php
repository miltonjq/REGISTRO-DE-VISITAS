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
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- para el css/ en esta version de laravel con el archivo vite.config,js -->

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <div class="flex items-center space-x-3 lg:pr-16 pr-6">
                    <img src="img/escudo.png" class="mr-3 h-12 sm:h-9" alt="Flowbite Logo" />
                    <h2 class="font-extrabold text-2xl leading-6 text-white">REGISTRO DE VISITAS</h2>
                </div>
                <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#">
                            <i class="lg:text-gray-300 text-gray-500 far fa-window-maximize text-lg leading-lg mr-2"></i>
                            INICIO
                        </a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#">
                            <i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i>
                            INFORMACIÓN
                        </a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#">
                            <i class="lg:text-gray-300 text-gray-500 far fa-address-book text-lg leading-lg mr-2"></i>
                            CONTACTO
                        </a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://www.facebook.com/GobiernoRegionalPuno/?locale=es_LA"><i class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Gobierno Regional Puno</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://www.regionpuno.gob.pe/gobierno-regional-puno/"><i class="lg:text-gray-300 text-gray-500 fab fa-chrome text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Gobierno Regional Puno</span></a>
                    </li>
                    <li class="flex items-center">
                        <div class="flex space-x-5 justify-center items-center pl-4 py-4">
                            <a href="{{ route('login') }}" class="px-4 py-2 text-xs font-bold text-white uppercase transition-all duration-150 bg-sky-700 rounded shadow outline-none active:bg-sky-700 hover:shadow-md focus:outline-none ease">
                                <i class="fas fa-angle-double-right"></i>
                                Ingresar
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("https://www.ctisoluciones.com/sites/default/files/2019-07/5%20consejos%20para%20una%20visita%20comercial%20efectiva.jpg");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>

            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Sistema Registro de Visitas
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                Gobierno Regional Puno 2023 - 2026. <br>
                                "Trabajando por un futuro mejor"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="pb-0 bg-white -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="transform  hover:scale-105 transition duration-300 lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Ley Orgánica de Gobiernos Regionales</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    La presente Ley Orgánica establece y norma la estructura,
                                    organización, competencias y funciones de los gobiernos regionales.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transform  hover:scale-105 transition duration-300 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Transparencia y Acceso a la Información Pública</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    La finalidad de proveer lo necesario para garantizar el
                                    acceso de toda persona a la información en
                                    posesión de los Poderes de la Unión.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="transform  hover:scale-105 transition duration-300 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Gobierno Digital</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Objetivo es definir la estrategia de la entidad para lograr
                                    sus objetivos de Gobierno Digital.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://i.postimg.cc/wvMBhLWN/6-B-Gobierno-regional-en-cuestion-por-gastos-450x270.jpg&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                        </div>
                        <h3 class="text-3xl font-semibold">LINEAMIENTO PARA ASEGURAR LA INTEGRIDAD Y TRANSPARENCIA</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            Establecer lineamientos para asegurar la integridad y transparencia
                            en las gestiones de intereses y otras actividades a través
                            del Registro de Visitas en Línea y Registro de Agendas Oficiales. <br>
                            DIRECTIVA N° 001-2022-PCM/SIP
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-100 bg-gray-400 mr-3"><i class="fas fa-fingerprint"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Ley Nº 27806, Ley de Transparencia y Acceso a la Información Pública</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-gray-100 bg-gray-400 mr-3"><i class="fas fa-fingerprint"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Decreto Legislativo N° 1412, Decreto Legislativo que aprueba la Ley de Gobierno Digital</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="pb-0 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="flex flex-col h-full items-center md:flex-row py-10 md:py-20 px-4 md:px-0 gap-10 md:gap-0">
                <div class=" mx-auto px-4 flex-1 h-full">

                    <div class="w-full flex flex-col items-center justify-center h-full px-4">
                        <h2 class="text-4xl font-semibold text-white">Gobierno Regional Puno</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            La gestión pública es moderna, transparente y democrática
                            en el marco del Estado de derecho, con equidad y
                            justicia social. Su territorio está ordenado y articulado
                            con perspectiva geopolítica.
                        </p>
                    </div>

                </div>
                <div class="flex-1 w-full flex justify-center">
                    <iframe class="w-full md:w-3/4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.5430311288966!2d-70.02787027520483!3d-15.8402253162972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d69d201c726b9%3A0xf45b3c1cd8a48b5f!2sGobierno%20Regional%20de%20Puno!5e0!3m2!1ses-419!2spe!4v1684596138733!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </section>
    </main>

    <footer class="relative bg-gray-300 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold">Gobierno Regional Puno</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
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
                            <span class="block uppercase dark:text-black text-sm font-semibold mb-2">Gobierno Regional - Puno</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm">RUC Nº 204063255815</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm">Jr. Deustua Nº 356</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm">gobernacion@regionpuno.gob.pe</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"> (+051) 354000</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-black font-semibold py-1">
                        Copyright © <span id="get-current-year">2023</span><a href="https://www.regionpuno.gob.pe/gobierno-regional-puno/" class="text-black hover:text-white" target="_blank"> Gobierno Regional de Puno
                            <a class="text-black hover:text-blueGray-800">System</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>
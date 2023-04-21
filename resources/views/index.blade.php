@extends('web')

@section('content')
<!-- Hero section with background image, heading, subheading and button -->
<div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: center;
      background-image: url('img/puno.jpg');
      height: 600px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 w-full overflow-hidden bg-cover"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
            <img class="mx-auto h-48" src="img/escudo.png" alt="">
            <h1 class="mb-6 text-4xl h-8 font-bold">Sistema de Registro de Visitas</h1>
            <h3 class="mb-8 text-3xl h-8 font-bold">Gobierno Regional de Puno</h3>
            <button
                type="button"
                class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Get started
            </button>
        </div>
      </div>
    </div>
  </div>
    <!-- <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class= " w-full">
            <img src="img/gore.jpg"  class="absolute -z-10 h-screen h-auto max-w-full" alt="">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.9000),white)] opacity-20"></div>
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <img class="mx-auto h-48" src="img/escudo.png" alt="">
                <figure class="mt-10">
                    <blockquote class="text-center text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                        <p>Sistema de Registro de Visitas</p>
                    </blockquote>
                <figcaption class="mt-10">
                     <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                        <div class="text-gray-600">Gobiern Regional de Puno</div>
                    </div>
                </figcaption>
                </figure>
            
            </div>
            </div>
    </section> -->
@endsection


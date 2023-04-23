@extends('web')

@section('content')
<!-- Hero section with background image, heading, subheading and button -->
<div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="
      background-position: center;
      background-image: url('img/puno23.jpg');
      height: 800px;
    ">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 w-full overflow-hidden bg-cover"
      style="background-color: rgba(153, 150, 150, 0.5)">
      <div class="flex h-full items-center justify-center">
        <div class="px-6 text-center text-white md:px-12">
            <img class="mx-auto h-48" src="img/logo_gore2.png" alt="">
            <h1 class="mb-6 text-4xl h-8 font-extrabold">Sistema de Registro de Visitas</h1>
            <h3 class="mb-8 text-3xl h-8 font-bold">Gobierno Regional de Puno</h3>
            <button
                type="button"
                class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Bienvenido
            </button>
        </div>
      </div>
    </div>
  </div>
@endsection


<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    {{-- <div class="items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">GOBIERNO REGIONAL DE PUNO</span>
        <img src="img/escudo.png" class="ml-20 mr-3 h-36" alt="" />
    </div> --}}
    <div class="flex justify-center items-center">
        <div class="flex flex-row">
            <a href="{{ route('home') }}"><p class="text-lg font-bold mx-4"><img src="img/escudo.png" class="ml-20 h-36" alt="" /></p></a>
            <div class="border-l border-gray-500 h-36 mx-4"></div>
            <p class="text-center text-xl font-semibold dark:text-black">GOBIERNO REGIONAL DE PUNO 2023 - 2026</p>
        </div>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

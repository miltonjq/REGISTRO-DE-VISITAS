<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="p-10 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div>
                    <h2 class="mb-6 h-16 pl-96 text-3xl text-gray-800 font-extrabold">REGISTRO DE VISITAS </h2>
                </div>
                @if(session('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert" id="success-message">
                        <strong class="font-bold">¡Éxito!</strong>
                        <span class="block sm:inline">{{ session('message') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L11 8.414l-1.934 1.934a.999.999 0 1 0 1.414 1.414L12.414 10l1.934 1.934a.999.999 0 1 0 1.414-1.414L13.828 10l1.52-1.52a.999.999 0 0 0 0-1.414z"/></svg>
                        </span>
                    </div>
                    <script>
                    
                    const successMessage = document.getElementById('success-message');

                    if (successMessage) {
                        setTimeout(() => {
                            successMessage.remove();
                        }, 2000);
                    }
                </script>
                @endif
                <form class="" method="POST" action="{{ route('registrar-visita.store') }}">
                    @csrf    
                    <div class="mb-8 flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
                                DNI
                            </label>
                            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dni" name="dni" type="text" placeholder="Ingrese DNI" required>
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombres">
                                NOMBRES
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" name="nombres" type="text" placeholder="">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellidos">
                                APELLIDOS
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="apellidos" name="apellidos" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="mb-8 flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">

                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha_y_hora">
                                FECHA Y HORA DE REGISTRO
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fecha_y_hora" name="fecha_y_hora" type="datetime-local" placeholder="">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                SEDE
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede" name="sede" type="text" placeholder="Seleccione...">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="oficina">
                            OFICINA
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="oficina" name="oficina">
                                    <option>Seleccione...</option>    
                                    <option>New Mexico</option>
                                    <option>Missouri</option>
                                    <option>Texas</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-12 flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                                PERSONERO
                            </label>
                            <input type="hidden" name="personero_id" value="{{  Auth::user()->id }}">
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="personero_id" type="text" value="{{ Auth::user()->name }}" >
                        </div>
                    </div>
                    
                    <div class="flex flex-col">
                        <button class="mb-4 mx-auto bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            GUARDAR
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</x-app-layout>
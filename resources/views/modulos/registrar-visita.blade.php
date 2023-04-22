<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div>
                        <h2 class="h-16 text-center text-3xl text-gray-800 font-extrabold">REGISTRO DE VISITAS </h2>
                    </div>
                    <!-- function hello -->
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
                            }, 3000);
                        }
                    </script>
                    @endif
                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert" id="error-message">
                            <strong class="font-bold">¡Error!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.999.999 0 1 0-1.414 1.414L11 8.414l-1.934 1.934a.999.999 0 1 0 1.414 1.414L12.414 10l1.934 1.934a.999.999 0 1 0 1.414-1.414L13.828 10l1.52-1.52a.999.999 0 0 0 0-1.414z"/></svg>
                            </span>
                        </div>
                        <script>
                        
                        const errorMessage = document.getElementById('error-message');

                        if (errorMessage) {
                            setTimeout(() => {
                                errorMessage.remove();
                            }, 3000);
                        }
                    </script>
                    @endif
                    <form class="" method="POST" action="{{ route('registrar-visita.store') }}" >
                        @csrf    
                        <div class="flex flex-col gap-6 ">
                            <livewire:registrar-visita2 />                     <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha_y_hora">
                                    FECHA Y HORA DE REGISTRO
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fecha_y_hora" name="fecha_y_hora" type="datetime-local" placeholder="" value="{{ date('Y-m-d\TH:i:s') }}">
                                @error('fecha_y_hora')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                SEDE
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede" name="sede">
                                        <option>Seleccione...</option>    
                                        @foreach($sedes as $sede)    
                                            <option value="{{$sede->id}}">{{$sede->nombre_sede}}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    </div>
                                    @error('sede')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="oficina">
                                OFICINA
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="oficina" name="oficina">
                                        <option>Seleccione...</option>    
                                        @foreach($oficinas as $oficina)    
                                            <option value='{{$oficina->id}}' >{{$oficina->nombre_oficina}}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    </div>
                                    @error('oficina')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class=" flex flex-wrap -mx-3 mb-2">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</x-app-layout>
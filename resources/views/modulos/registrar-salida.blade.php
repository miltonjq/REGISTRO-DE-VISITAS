<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div>
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
                </div>
                <div>
                    <h2 class="py-8 text-center text-3xl text-gray-900 font-sans"><strong>REGISTAR SU SALIDA Y ALGUNA OBSERVACIÓN</strong></h2>
                </div>
                @if(Auth::user()->roles->first()->name  != 'supervisor')
                    <form class="" method="POST" action="{{ route('registrar-salida.store', ) }}">
                        @csrf   
                        
                            <div class=" w-full flex justify-center mb-6">
                                <div class="w-96 flex flex-col items-center">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                                        REGISTRAR SU SALIDA:
                                    </label>
                                    <input type="number" id="dni" class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese DNI" name="dni" required>
                                </div>
                            </div>
                    </form>
                @endif
              
               

                <div class="pb-6 relative flex items-center">
                    <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>
                
                @if(session('message')) 
                    @livewire('tabla-registrar-salida',  ['reportes' => $reportes, 'message'=> session('message')])
                @else
                    @livewire('tabla-registrar-salida',  ['reportes' => $reportes])
                @endif
            </div>
        </div>
        
    </nav>
    <script>
        addEventListener("load", (event) => {
            let dni = document.getElementById('dni');
            dni.focus();
        });
    </script>
</x-app-layout>
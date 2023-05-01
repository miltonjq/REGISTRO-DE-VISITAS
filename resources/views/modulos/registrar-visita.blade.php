<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white font-sans">
                    <div>
                        <h2 class="h-16 text-center text-3xl text-gray-900 font-sans"><strong>REGISTRO DE VISITAS - GOBIERNO REGIONAL PUNO</strong></h2>
                    </div>
                    <div class="pb-10 relative flex items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                            <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                        <div class="flex-grow border-t border-gray-400"></div>
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
                    <form class="" method="POST" action="{{ route('registrar-visita.store') }}" id="formRegistrarVisita" >
                        @csrf    
                        <div class="flex flex-col gap-6 ">
                            @livewire('registrar-visita2', ['oficinas' => $oficinas, 'sedes' => $sedes])
                            
                            <div class="flex flex-col">
                                <button class="mb-4 mx-auto bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >
                                    GUARDAR
                                </button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- @if(session('message'))
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Se registro correctamente la visita.',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif -->

    <script>
        
        addEventListener("load", (event) => {
            document.getElementById('formRegistrarVisita').addEventListener('submit', () => {
                
            })

            let dni = document.getElementById('dni');
            dni.focus();
        });

    </script>
</x-app-layout>
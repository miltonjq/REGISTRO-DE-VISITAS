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

                <div class="pb-6 relative flex items-center">
                    <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>

                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="tabla10" class="display table table-striped table-bordered stripe hover font-sans" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="py-3 text-center text-2xl text-gray-900 font-extrabold">TABLA DE REGISTRO DE SALIDA</h3>
                        
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th>ID</th>
                                <th>DNI</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>ENTRADA</th>
                                <th>OFICINA</th>
                                <th>PISO</th>
                                <th>Observaciones</th>
                                <th>SALIDA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportes as $reporte)
                                <tr>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->id}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->dni}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->nombres}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->apellidos}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->fecha_y_hora}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->nombre_oficina}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->piso}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        {{-- <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-4 py-1 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Agregar Obs.</a> --}}
                                        <button class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-4 py-1 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 show-modal">Agregar Obs.</button>
                                    </td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        <a href="{{route('registrar-salida.edit', $reporte->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-1 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Salida</a>    
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Modelo del Modal --}}
                    <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
                        <div class="bg-white rounded shadow-lg w-1/3">
                            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                <h3 class="font-bold text-gray-800 dark:text-white">
                                  Modal title
                                </h3>
                                <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800 close-modal" data-hs-overlay="#hs-focus-management-modal">
                                  <span class="sr-only">Close</span>
                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                  </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                            </div>
                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                <button type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800 close-modal" data-hs-overlay="#hs-focus-management-modal">
                                  Cancelar
                                </button>
                                <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                                  Guardar
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="plugins/js/jquery-3.5.1.js"></script>
        <script src="plugins/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {
                $table = $('#tabla10').DataTable( {
                    responsive: true,
                } );

                $('select').css('width','4rem');
            } );
            
            addEventListener("load", (event) => {
                let dni = document.getElementById('dni');
                dni.focus();
            });
        
        </script>
        <script>
            // Initialization for ES Users
            const modal = document.querySelector('.modal');

            const showModal = document.querySelector('.show-modal');
            const closeModal = document.querySelectorAll('.close-modal');

            showModal.addEventListener('click', function (){
                modal.classList.remove('hidden')
            });

            closeModal.forEach(close => {
                close.addEventListener('click', function (){
                    modal.classList.add('hidden')
                });
            });
        </script>
    </nav>
</x-app-layout>
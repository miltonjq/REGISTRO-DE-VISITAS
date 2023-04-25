<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="p-10 rounded-lg mt-20">
                <div>
                    <h2 class="h-16 text-center text-3xl text-gray-800 font-extrabold">AGREGAR OFICINAS </h2>
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
                <form class="" method="POST" action="{{ route('agregar-oficina.store') }}">
                    @csrf    
                        <div class="grid gap-6 mb-6 md:grid-cols-4">
                            <div>
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                OFICINA:
                                </label>
                                <input type="text" id="first_name" class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese la Oficina" name='nombre_oficina' required>
                            </div>
                            <div>
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                SEDE:
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede" name="sede_id">
                                        <option>Seleccione...</option>    
                                        @foreach($sedes as $sede)   
                                            <option value="{{$sede->id}}" >{{$sede->nombre_sede}}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    </div>
                                    @error('sede')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="piso">
                                    PISO:
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="piso" type="text" value="" name="piso">
                                @error('piso')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col py-7">
                                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 rounded-lg">
                                    Agregar
                                </button>
                            </div>
                        </div>
                </form>

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    
                    <table id="tabla02" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Registro </h3>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE DE LA OFICINA</th>
                                <th>SEDE</th>
                                <th>PISO</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($oficinas as $oficina)
                            <tr>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$oficina->id}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$oficina->nombre_oficina}}</td>
                                <td class="font-medium text-gray-900 dark:text-black capitalize">{{$oficina->sede->nombre_sede}}</td>
                                <td class="font-medium text-gray-900 dark:text-black capitalize">{{$oficina->piso}}</td>
                                <td class="px-6 py-16">
                                    <form action="{{ route('agregar-oficina.destroy', $oficina->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2< dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            
                        </tbody>

                    </table>
                </div>

                <!-- jQuery -->
                <script src="plugins/js/jquery-3.5.1.js"></script>
                <script src="plugins/js/jquery.dataTables.min.js"></script>
                <script src="plugins/js/dataTables.buttons.min.js"></script>
                <script src="plugins/js/jszip.min.js"></script>
                <script src="plugins/js/pdfmake.min.js"></script>
                <script src="plugins/js/vfs_fonts.js"></script>
                <script src="plugins/js/buttons.html5.min.js"></script>
                <script src="plugins/js/buttons.print.min.js"></script>
                <script src="plugins/js/buttons.colVis.min.js"></script>
                <script src="plugins/js/dataTables.responsive.min.js"></script>
                <script>
                    $(document).ready(function() {
                        var table = $('#tabla02').DataTable( {
                            lengthChange: false,
                            dom: 'Bfrtip',
                            responsive: true,
                            buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
                        } );
                    
                        // Insert at the top left of the table
                        table.buttons().container()
                            .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
                    } );
                </script>
                </div>
            </div>
        </nav>
</x-app-layout>
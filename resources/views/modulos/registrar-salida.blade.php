<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="tabla01" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Registrar Salida </h3>
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
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th>DNI</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>ENTRADA</th>
                                <th>OFICINA</th>
                                <th>PISO</th>
                                <th>SALIDA</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportes as $reporte)
                                <tr>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->dni}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->nombres}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->apellidos}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->fecha_y_hora}}</td>
                                    
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->nombre_oficina}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">PISO 1</td>
                                    
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        <a href="{{route('registrar-salida.edit', $reporte->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-1 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Salida</a>    
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
                var table = $('#tabla01').DataTable( {
                    lengthChange: false,
                    dom: 'Bfrtip',
                    responsive: true,
                    buttons: [  ]
                } );
            
                // Insert at the top left of the table
                table.buttons().container()
                    .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
            } );
        </script>
    </nav>
</x-app-layout>
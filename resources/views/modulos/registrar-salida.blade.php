<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="tabla01" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Registrar Salida </h3>
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
                                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-3 py-1 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Registrar Salida
                                        </button>
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
                    buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
                } );
            
                // Insert at the top left of the table
                table.buttons().container()
                    .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
            } );
        </script>
    </nav>
</x-app-layout>
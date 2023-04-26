<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div class="w-full flex justify-start">
                        <a href="{{ route('reportePDF') }}" class="bg-cyan-600 rounded-md py-2 px-3 text-white flex items-center gap-4"> Genera Reporte <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z"/></svg></a>
                    </div>
                    <table id="tabla01" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Reportes de Registros </h3>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th>DNI</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>ENTRADA</th>
                                <th>SALIDA</th>
                                <th>OFICINA</th>
                                <th>PISO</th>
                                <!-- <th>SEDE</th> -->
                                <th>MOTIVO</th>
                                <th>OBSERVACIONES</th>
                                <th>PERSONERO</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportes as $reporte)
                                <tr>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->dni}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->nombres}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->apellidos}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->fecha_y_hora}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                    {{$reporte->fecha_y_hora_salida}}
                                    </td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->nombre_oficina}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">PISO 1</td>
                                    
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">MOTIVO 1</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">OBSERVACIONES 1</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black uppercase">{{$reporte->personero->name}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        @csrf
                                    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-4 py-2 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
                                        Editar
                                    </button>
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-3 py-2 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            Eliminar
                                        </button>
                                    </form>
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
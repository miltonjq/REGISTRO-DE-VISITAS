<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="example1" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Reportes de Registros </h3>
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>FECHA</th>
                                <th>PERSONERO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reportes as $reporte)
                                <tr>
                                    <td>{{$reporte->dni}}</td>
                                    <td>{{$reporte->nombres}}</td>
                                    <td>{{$reporte->apellidos}}</td>
                                    <td>{{$reporte->fecha_y_hora}}</td>
                                    <td>{{$reporte->personero_id}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        
        <script>
           $(document).ready(function() {
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                } );
            
                // Insert at the top left of the table
                table.buttons().container()
                    .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
            } );
        </script>
        </nav>
</x-app-layout>
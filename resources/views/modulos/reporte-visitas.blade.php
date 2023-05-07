<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="tabla01" class="table table-striped table-bordered stripe hover font-sans" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <h3 class="py-2 text-center text-3xl text-gray-900 font-sans"><strong>TABLA DE REPORTES DE REGISTROS</strong></h3>
                       
                        <div date-rangepicker class="py-4 flex items-center gap-3 justify-center ">
                            <span class=" text-gray-600 font-extrabold">DESDE: </span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="min" name="min" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha inicio">
                            </div>
                            <span class=" text-gray-600 font-extrabold">HASTA:</span>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" id="max" name="max" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha final">
                            </div>
                        </div>
                        <div class="relative flex items-center py-9">
                            <div class="flex-grow border-t border-gray-400"></div>
                                <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                            <div class="flex-grow border-t border-gray-400"></div>
                        </div>
                       
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                            <tr>
                                <th>ID</th>
                                <th>DNI</th>
                                <th>NOMBRES</th>
                                <th>APELLIDOS</th>
                                <th>ENTRADA</th>
                                <th>SALIDA</th>
                                <th>OFICINA</th>
                                <th>PISO</th>
                                <!-- <th>SEDE</th> -->
                                <th>OBSERVACIONES</th>
                                <th>PERSONERO</th>
                               
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
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                    {{$reporte->fecha_y_hora_salida}}
                                    </td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->nombre_oficina}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black capitalize">{{$reporte->oficina->piso}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$reporte->observaciones}}</td>
                                    <td class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black uppercase">{{$reporte->personero->name}}</td>
                                    
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
        <script src="https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
        <script src="https://cdn.datatables.net/datetime/1.4.0/js/dataTables.dateTime.min.js"></script>
        <script src="plugins/js/jszip.min.js"></script>
        <script src="plugins/js/pdfmake.min.js"></script>
        <script src="plugins/js/vfs_fonts.js"></script>
        <script src="plugins/js/buttons.html5.min.js"></script>
        <script src="plugins/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script> -->
        <script>
            
            var minDate, maxDate;
 

            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var min = minDate.val();
                    min = new Date(min);
                    min.setDate(min.getDate() + 1);
                    min.setHours(00);
                    
                    var max = maxDate.val();
                    max = new Date(max);
                    max.setDate(max.getDate() + 1);
                    max.setHours(23);

                    if(max.getFullYear() <= 1970){
                        max.setFullYear(2100);
                    }
                    max.setMinutes(59);
                    max.setSeconds(59);

                    console.log(min, max);
                    console.log(new Date( data[4] ) <= max)
                   

                    var date = new Date( data[4] );
            
                    if (
                        ( min === null && max === null ) ||
                        ( min === null && date <= max ) ||
                        ( min <= date   && max === null ) ||
                        ( min <= date   && date <= max )
                    ) {
                        return true;
                    }
                    return false;
                }
            );
            
            $(document).ready(async function() {
                
               
                minDate = new DateTime($('#min'), {
                    format:'YYYY-MM-DD' ,
                    useCurrent: false
                });
                maxDate = new DateTime($('#max'), {
                    format: 'YYYY-MM-DD',
                    useCurrent: false
                });

          
                var table = $('#tabla01').DataTable({
                    responsive: true,
                    buttons: [ 'excel', 'pdf', {
                        extend: 'print',
                        messageTop: '<div style=" padding-bottom:2rem; padding-top:2rem;"> <div style="display:flex; justify-content:center; padding-bottom:2rem; padding-top:2rem;"><image src="https://i.postimg.cc/CKv00QT0/LOGO-GORE-2.png" width="200" /></div>  <div style="display:flex; justify-content:center;"><strong style="color:black;font-size:1.5rem;">Gobierno Regional de Puno 2023 - 2026</strong></div> </div>'
                        } ]
                    } );
                    
                table.buttons( 0, null ).container().prependTo(
                    table.table().container()
                );
                        
   
                

                
                $('#min, #max').on('change', function () {
                   
                    table.draw();
                });

                $('select').css('width','4rem');
            });
        </script>
    </nav>
</x-app-layout>
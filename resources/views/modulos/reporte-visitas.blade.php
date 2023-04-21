<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="p-10 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    
                <table id="example1" class="table table-striped table-bordered stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                
                    <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Reportes de Registros </h3>

                <thead>
                        <tr>
                            <th>Header 1</th>
                            <th>Header 2</th>
                            <th>Header 3</th>
                            <th>Header 4</th>
                            <th>Header 5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row:1 Cell:1</td>
                            <td>Row:1 Cell:2</td>
                            <td>Row:1 Cell:3</td>
                            <td>Row:1 Cell:4</td>
                            <td>Row:1 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:2 Cell:1</td>
                            <td>Row:2 Cell:2</td>
                            <td>Row:2 Cell:3</td>
                            <td>Row:2 Cell:4</td>
                            <td>Row:2 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:3 Cell:1</td>
                            <td>Row:3 Cell:2</td>
                            <td>Row:3 Cell:3</td>
                            <td>Row:3 Cell:4</td>
                            <td>Row:3 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:4 Cell:1</td>
                            <td>Row:4 Cell:2</td>
                            <td>Row:4 Cell:3</td>
                            <td>Row:4 Cell:4</td>
                            <td>Row:4 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:5 Cell:1</td>
                            <td>Row:5 Cell:2</td>
                            <td>Row:5 Cell:3</td>
                            <td>Row:5 Cell:4</td>
                            <td>Row:5 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:6 Cell:1</td>
                            <td>Row:6 Cell:2</td>
                            <td>Row:6 Cell:3</td>
                            <td>Row:6 Cell:4</td>
                            <td>Row:6 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:7 Cell:1</td>
                            <td>Row:7 Cell:2</td>
                            <td>Row:7 Cell:3</td>
                            <td>Row:7 Cell:4</td>
                            <td>Row:7 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:8 Cell:1</td>
                            <td>Row:8 Cell:2</td>
                            <td>Row:8 Cell:3</td>
                            <td>Row:8 Cell:4</td>
                            <td>Row:8 Cell:5</td>
                        </tr>
                        <tr>
                            <td>Row:9 Cell:1</td>
                            <td>Row:9 Cell:2</td>
                            <td>Row:9 Cell:3</td>
                            <td>Row:9 Cell:4</td>
                            <td>Row:9 Cell:533</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script>
           $(function () {
                $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                });
            });
        // $(document).ready(function() {

        // var table = $('#tabla1').DataTable({
        //         responsive: true
        //     })
        //     .columns.adjust()
        //     .responsive.recalc();
        // });
        </script>
        </nav>
</x-app-layout>
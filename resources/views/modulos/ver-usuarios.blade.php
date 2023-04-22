<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="example" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Registros de Usuarios</h3>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">NOMBRES COMPLETOS</th>
                                <th scope="col" class="px-6 py-3">EMAIL</th>
                                <th scope="col" class="px-6 py-3">ROL</th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$user->id}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$user->name}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{$user->email}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900">rol</td>
                                <td scope="row" class="px-6 py-16">
                                    @csrf
                                    <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
                                        Editar
                                    </button>
                                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                    <!-- jQuery -->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
                    <!--Datatables -->
                    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
                    <script>
                    $(document).ready(function () {
                        var t = $('#example').DataTable({
                            columnDefs: [
                                {
                                    searchable: false,
                                    orderable: false,
                                    targets: 0,
                                },
                            ],
                            order: [[1, 'asc']],
                            
                        });
                    
                        t.on('order.dt search.dt', function () {
                            let i = 1;
                    
                            t.cells(null, 0, { search: 'applied', order: 'applied' }).every(function (cell) {
                                this.data(i++);
                            });
                        }).draw();
                    });
                </script>
            </div>
        </div>
        </nav>
</x-app-layout>
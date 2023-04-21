<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="p-10 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div>
                    <h2 class="h-16 text-center text-3xl text-gray-800 font-extrabold">AGREGAR SEDES </h2>
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
                <form class="" method="POST" action="{{ route('agregar-sedes.store') }}">
                    @csrf    
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <input type="text" id="first_name" class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese la Sede" name="nombre_sede" required>
                            </div>
                            <div class="flex flex-col">
                                <button class="mb-4 mx-16 bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 ml-2 rounded">
                                    Agregar
                                </button>
                            </div>
                        </div>
                </form>

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    
                    <table id="tabla1" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    
                        <h3 class="h-16 text-center text-3xl text-gray-800 font-extrabold">Tabla de Registro </h3>
                   
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE DE LA OFICINA</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($sedes as $sede)
                            <tr>
                                <td>{{$sede->id}}</td>
                                <td>{{$sede->nombre_sede}}</td>
                                <td>
                                    <form action="{{ route('agregar-sedes.destroy', $sede->id) }}" method="POST">
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
                <!--/container-->

                    <!-- jQuery -->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                    <!--Datatables -->
                    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
                    <script>
                    $(document).ready(function() {

                    var table = $('#tabla1').DataTable({
                            responsive: true
                        })
                        .columns.adjust()
                        .responsive.recalc();
                    });
                    </script>
        
                </div>
            </div>
        </nav>
</x-app-layout>
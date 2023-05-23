<x-app-layout>
    <nav>
        <div class="p-6 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white flex flex-col gap-6">
                    <div>
                        <h2 class="py-2 text-center text-3xl text-gray-900 font-sans-extrabold "><strong>AGREGAR NUEVO USUARIO</strong></h2>
                    </div>
                    <div class="relative flex items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>
                    @if(session('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">¡Éxito!</strong>
                        <span class="block sm:inline">{{ session('message') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 5.652a.999.999 0 1 0-1.414-1.414L10 8.586 6.066 4.652a.999.999 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a.999.999 0 1 0 1.414 1.414L10 11.414l3.934 3.934a.999.999 0 1 0 1.414-1.414L11.414 10l3.934-3.934z" />
                            </svg>
                        </span>
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">¡Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 5.652a.999.999 0 1 0-1.414-1.414L10 8.586 6.066 4.652a.999.999 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a.999.999 0 1 0 1.414 1.414L10 11.414l3.934 3.934a.999.999 0 1 0 1.414-1.414L11.414 10l3.934-3.934z" />
                            </svg>
                        </span>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('agregar-usuario.store') }}">
                        @csrf
                        <div class="flex flex-col gap-6 ">
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                        NOMBRES Y APELLIDOS:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese nombres y apellidos completo" id="nombre" type="text" name="nombre" value="" required>
                                    @error('nombre')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
                                        DNI:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese su DNI" id="dni" type="number" name="dni" value="" required>
                                    @error('dni')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rol">
                                        TIPO DE USUARIO:
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="rol" name="rol" required>
                                            <option value="" disabled selected>Seleccione...</option>
                                            <option default value="guardiania">Guardiania</option>
                                            <option value="admin">Admin</option>
                                            <option value="supervisor">Supervisor</option>
                                        </select>
                                        @error('rol')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                        @enderror

                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="correo">
                                        EMAIL:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="example@example.com" id="correo" name="correo" type="email" value="" required>
                                    @error('correo')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contrasena">
                                        CONTRASEÑA:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="••••••••••••••••" id="contrasena" type="password" name="contrasena" value="" required>
                                    @error('contrasena')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="confirm_contrasena">
                                        CONFIRMAR CONTRASEÑA:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="••••••••••••••••" id="confirm_contrasena" type="password" name="confirm_contrasena" value="" required oninput="check(this)">
                                    <span id="message"></span>
                                    @error('confirm_contrasena')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
                                        N° CELULAR:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="999-999-999" id="telefono" type="text" name="telefono" value="" required>
                                    @error('telefono')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <script>
                                function check(input) {
                                    if (input.value != document.getElementById('password').value) {
                                        input.setCustomValidity('Las contraseñas no coinciden');
                                    } else {
                                        input.setCustomValidity('');
                                    }
                                }
                            </script>
                            <div class="flex flex-col">
                                <button class="mb-4 mx-auto bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-5 rounded">
                                    GUARDAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    @if(session('message'))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: "{{session('message')}}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif
    @if(session('error'))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: "{{session('error')}}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
    @endif
</x-app-layout>
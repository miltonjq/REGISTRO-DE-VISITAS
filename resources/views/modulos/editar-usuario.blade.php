<x-app-layout>
    <nav>
        <div class="p-6 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white flex flex-col gap-6">
                    <div>
                        <a href="{{route('ver-usuarios')}}" class="py-2 text-center text-3xl text-gray-900 font-sans-extrabold ">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4L288 214.3V256v41.7L459.5 440.6zM256 352V256 128 96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160C4.2 237.5 0 246.5 0 256s4.2 18.5 11.5 24.6l192 160c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V352z"/></svg>
                        </a>
                    </div>
                    <div>
                        <h2 class="py-2 text-center text-3xl text-gray-900 font-sans-extrabold "><strong>EDITAR USUARIO:  {{$user->name}}</strong></h2>
                    </div>
                    <div class="relative flex items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">Gobierno Regional de Puno</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>
                    @if(session('messageUser'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" id="success-message">
                            <strong class="font-bold">¡Éxito!</strong>
                            <span class="block sm:inline">{{ session('messageUser') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path d="M14.348 5.652a.999.999 0 1 0-1.414-1.414L10 8.586 6.066 4.652a.999.999 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a.999.999 0 1 0 1.414 1.414L10 11.414l3.934 3.934a.999.999 0 1 0 1.414-1.414L11.414 10l3.934-3.934z"/>
                                </svg>
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

                    @if(session('errorUser'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert" id="error-message">
                            <strong class="font-bold">¡Error!</strong>
                            <span class="block sm:inline">{{ session('errorUser') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path d="M14.348 5.652a.999.999 0 1 0-1.414-1.414L10 8.586 6.066 4.652a.999.999 0 1 0-1.414 1.414L8.586 10l-3.934 3.934a.999.999 0 1 0 1.414 1.414L10 11.414l3.934 3.934a.999.999 0 1 0 1.414-1.414L11.414 10l3.934-3.934z"/>
                                </svg>
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

                    
                    <form action="{{route('agregar-usuario.update', $user->id)}}" method="POST" >
                        @method('PUT')
                        @csrf  
                        <div class="flex flex-col gap-6 ">
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                                        NOMBRES Y APELLIDOS:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese nombres y apellidos completo" id="nombre" type="text" name="nombre" value="{{$user->name}}" required>
                                    @error('nombre')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
                                        DNI:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ingrese su DNI" id="dni" type="number" name="dni" value="{{$user->dni}}" required>
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
                                            <option default value="personero">Personero</option>    
                                            <option value="admin">Admin</option>    
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
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="example@example.com" id="correo" name="correo" type="email" value="{{$user->email}}" required>
                                    @error('correo')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="telefono">
                                        N° CELULAR:
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="999-999-999" id="telefono" type="text" name="telefono" value="{{$user->telefono}}" required>
                                    @error('telefono')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror 
                                </div>
                            </div>
                            
                            <div class="flex flex-col">
                                <button class="mb-4 mx-auto bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-5 rounded" type="submit">
                                    ACTUALIZAR
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <h2>Cambiar la contraseña</h2>
                    <form action="{{route('actualizar-password', $user->id)}}" method="POST" >
                        @method('PUT')
                        @csrf  
                        <div class="flex flex-col gap-6 ">                            
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
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="••••••••••••••••" id="confirm_contrasena" type="password" name="confirm_contrasena" value="" onkeyup="check(this)" data-toggle="password" oninput="check(this)" required>
                                    <span id="message"></span>
                                    @error('confirm_contrasena')
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
                                <button class="mb-4 mx-auto bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-5 rounded" type="submit">
                                    Cambiar
                                </button>
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </nav>
    @if(session('messageUser'))
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: "{{session('messageUser')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if(session('errorUser'))
        <script>
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: "{{session('errorUser')}}",
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
</x-app-layout>


<x-app-layout>
    <nav>
        <div class="p-4 sm:ml-64">
            <div class="border-gray-200 rounded-lg dark:border-gray-700 mt-[4.5rem]">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div>
                        <h2 class="h-16 text-center text-3xl text-gray-800 font-extrabold">AGREGAR NUEVO USUARIO</h2>
                    </div>
                    <form class="" method="POST" action="" >
                        @csrf    
                        <div class="flex flex-col gap-6 ">
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                                        NOMBRES Y APELLIDOS COMPLETOS:
                                    </label>
                                    <input type="hidden" name="personero_id" value="">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="personero_id" type="text" value="" >
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                    TIPO DE USUARIO:
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede" name="sede">
                                            <option>Seleccione...</option>    
                                            
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                                    SEDE:
                                    </label>
                                    <div class="relative">
                                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sede" name="sede">
                                            <option>Seleccione...</option>    
                                            
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                                        CONTRASEÑA:
                                    </label>
                                    <input type="hidden" name="personero_id" value="">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="••••••••••••••••" id="personero_id" type="text" value="" >
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                                        CONFIRMAR CONTRASEÑA:
                                    </label>
                                    <input type="hidden" name="personero_id" value="">
                                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="••••••••••••••••" id="personero_id" type="text" value="" >
                                </div>
                            </div>
                        
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
</x-app-layout>
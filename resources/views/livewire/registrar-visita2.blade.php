<div class=" flex flex-wrap -mx-3 mb-2 ">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
            DNI: {{$dni}}
        </label>
        <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:change="addDni($event.target.value)" id="dni" name="dni" type="text" placeholder="Ingrese DNI" required>
        @error('dni')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        <script>
            document.getElementById('dni').addEventListener('keypress', function(event) {
                if (event.keyCode === 13) { 
                    event.preventDefault();
                }
            });
        </script>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombres">
            NOMBRES
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" name="nombres" type="text" placeholder="" value="{{$nombre}}">
        @error('nombres')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellidos">
            APELLIDOS
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="apellidos" name="apellidos" type="text" placeholder="" value="{{$apellido}}">
        @error('apellidos')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>

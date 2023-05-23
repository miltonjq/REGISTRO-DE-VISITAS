<div class="flex flex-col gap-6">
    <div class=" flex flex-wrap -mx-3 mb-2 ">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dni">
                DNI: {{$dni}}
            </label>
            <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-black-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" wire:change="addDni($event.target.value)" id="dni" name="dni" type="number" maxlength="8" placeholder="Ingrese DNI" required>
            <!-- @error('dni')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror -->
            @error('dni')
            <script>
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: '{{ $message }}',
                    showConfirmButton: false,
                    timer: 3000
                })
            </script>
            @enderror

        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombres">
                NOMBRES
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nombres" name="nombres" type="text" placeholder="" value="{{$nombre}}" readonly>
            @error('nombres')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="apellidos">
                APELLIDOS
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="apellidos" name="apellidos" type="text" placeholder="" value="{{$apellido}}" readonly>
            @error('apellidos')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha_y_hora">
                REGISTRO DE ENTRADA
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="fecha_y_hora" name="fecha_y_hora" type="datetime-local" placeholder="" value="{{ date('Y-m-d\TH:i:s') }}" readonly>
            @error('fecha_y_hora')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="oficina">
                OFICINA
            </label>
            <div class="relative">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="oficina" name="oficina" type="text" wire:model="nombreOficina" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingrese la oficina" value="">
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                </div>
                @error('oficina')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
                SEDE
            </label>
            <div class="relative">
                <input type="text" value="{{$name_sede}}" class="appearance-none capitalize block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" readonly>
            </div>
        </div>
    </div>
    <div class=" flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="piso">
                PISO
            </label>
            <input class="appearance-none capitalize block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="piso" type="text" value="{{$piso}}" readonly>
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="personero_id">
                PERSONERO
            </label>
            <input type="hidden" name="personero_id" value="{{  Auth::user()->id }}" readonly>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="personero_id" type="text" value="{{ Auth::user()->name }}" readonly>
        </div>
    </div>
    @if(session('message'))
    <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Se registro correctamente la visita.',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
    @endif
    <script>
        let oficina = document.getElementById('oficina');

        document.getElementById('dni').addEventListener('keypress', function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();

                oficina.focus();
            }
        });
    </script>
</div>
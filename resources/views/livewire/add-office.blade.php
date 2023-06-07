<div class="flex gap-6 items-end ">
    <div>
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sede">
            OFICINA:
        </label>
        <input type="text" wire:model="office" id="first_name"
            class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingrese la Oficina"
            name='nombre_oficina' required>
    </div>
    <div class="w-36">
        {{-- <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
            for="sede">
            ABREV OFICINA:
        </label> --}}
        {{-- <input type="text" id="first_name" class="block appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingrese la Oficina" name='nombre_oficina' required> --}}
        <div
            class="block h-12 uppercase appearance-none w-full bg-gray-200 border border-black-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            {{ $abrevOffice }}
        </div>
    </div>
</div>

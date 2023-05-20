<?php

namespace App\Http\Livewire;

use App\Models\Oficinas;
use App\Models\Sedes;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegistrarVisita2 extends Component
{
    public $dni = '';
    public $nombre = '';
    public $apellido = '';
    public $oficinas= [];

    public $nombreOficina = '';
    public $name_sede= '';
    public $piso= '';

    public function addDni(string $dni)
    {
        $this->dni = $dni;
        
        // Validating the input field with name dni
        $this->validate([
            'dni' => 'required'
        ]);
        
        if($this->dni != ''){
            $response = Http::withHeaders([

            ])->get('https://apiperu.dev/api/dni/'.$this->dni.'?api_token=0504a8cc7ea97214ceded17cee67efd7dee21106bb75270b8daf9ff6a69fc881');
            //dd($response);

            $data = json_decode($response->getBody()->getContents())->data;
            //dd($data->numero);

            if(isset($data->numero)){
                $dni = $data->numero;
                $this->nombre = $data->nombres;
                $this->apellido = $data->apellido_paterno.' '.$data->apellido_materno;
            } else {
                $this->dni = '';
                $this->nombre = '';
                $this->apellido = '';
                $this->addError('dni', 'El DNI ingresado no existe');
            }
        }    
    }

    public function updatedNombreOficina($name)
    {
        $oficinaName = Oficinas::where('nombre_oficina', $name)->first();
        // dd($oficinaName);

        if(isset($oficinaName)){
            $this->name_sede = $oficinaName->sede->nombre_sede;
            $this->piso = $oficinaName->piso;
        } else {
            $this->piso = '';
            $this->name_sede = '';
            $this->addError('oficina', 'La oficina ingresada no existe');
        }
    }

    public function render()
    {
        return view('livewire.registrar-visita2');
    }
}


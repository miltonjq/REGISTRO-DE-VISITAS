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
                'Authorization' => 'Bearer apis-token-2804.FPvCidtev1tYKiT9b30AK4paQT0P3WgK',
            ])->get('https://api.apis.net.pe/v1/dni?numero='.$this->dni);
    
            $data = json_decode($response->getBody()->getContents());
    
            if(isset($data->numeroDocumento)){
                $dni = $data->numeroDocumento;
                $this->nombre = $data->nombres;
                $this->apellido = $data->apellidoPaterno.' '.$data->apellidoMaterno;
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


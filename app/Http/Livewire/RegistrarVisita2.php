<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegistrarVisita2 extends Component
{
    

    public $dni = '';
    public $nombre = '';
    public $apellido = '';

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

    public function render()
    {
        return view('livewire.registrar-visita2');
    }
}


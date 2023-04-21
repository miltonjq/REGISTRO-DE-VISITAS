<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrarVisita2 extends Component
{
    

    public $dni = '';

    public function addDni(string $dni)
    {
        $this->dni = $dni;
    }

    public function render()
    {
        return view('livewire.registrar-visita2');
    }
}

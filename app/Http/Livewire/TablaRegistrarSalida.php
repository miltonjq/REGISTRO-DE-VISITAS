<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Visitas;
use Illuminate\Support\Facades\Auth;

class TablaRegistrarSalida extends Component
{
    public $reportes;
    public $message;
    // public $selectedReport;
    public $dni;
    public $selectedId;
    public $isModalLivewire = false;
    public $selectedReport;
    public $observaciones;
    public $search = '';
    

    protected $listeners = ['selectReport'];
    
    public function selectReport($reporte)
    {
        // dd($reporte);
        $this->selectedReport = $reporte;
        $this->setIsModal();
        $this->dni = $this->selectedReport['dni'];
        $this->selectedId = $this->selectedReport['id'];
        $this->observaciones = $this->selectedReport['observaciones'];
    }
    
    public function setIsModal()
    {
        $this->isModalLivewire = !$this->isModalLivewire;
    }

    public function updatedSearch($value){  

        $user = Auth::user();

        if($user->roles->first()->name == 'admin' or $user->roles->first()->name == 'supervisor'){
           
            $this->reportes = Visitas::where('estado', '2')
            ->where(function($query) use ($value){
                $query->where('nombres', 'like', '%'.$value.'%')
                ->orWhere('apellidos', 'like', '%'.$value.'%')
                ->orWhere('fecha_y_hora', 'like', '%'.$value.'%')
                ->orWhere('fecha_y_hora_salida', 'like', '%'.$value.'%')
                ->orWhere('observaciones', 'like', '%'.$value.'%')
                ->orWhere('dni', 'like', '%'.$value.'%')
                ->orWhereHas('oficina', function($query) use ($value){
                    $query->where('nombre_oficina', 'like', '%'.$value.'%')->orWhere('piso', 'like', '%'.$value.'%');
                });
            })->get();
           
        }else{
            $reportes = User::find($user->id);            
            
            $this->reportes = $reportes->where('estado', '2')
            ->where(function($query) use ($value){
                $query->where('nombres', 'like', '%'.$value.'%')
                ->orWhere('apellidos', 'like', '%'.$value.'%')
                ->orWhere('fecha_y_hora', 'like', '%'.$value.'%')
                ->orWhere('fecha_y_hora_salida', 'like', '%'.$value.'%')
                ->orWhere('observaciones', 'like', '%'.$value.'%')
                ->orWhere('dni', 'like', '%'.$value.'%');
            })->get();

        }
    }
    
    public function render()
    {
        return view('livewire.tabla-registrar-salida');
    }
}


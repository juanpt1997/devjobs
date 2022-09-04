<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{
    // ? Method B from the component
    // ? Si quiero que escuche con el wire:click necesito definir listeners, no basta solo con tener el mismo método nombrado
    // protected $listeners = ['prueba'];
    // public function prueba($vacante_id)
    // {
    //     dd(
    //         $vacante_id
    //     );
    // }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', ['vacantes' => $vacantes]);
    }
}

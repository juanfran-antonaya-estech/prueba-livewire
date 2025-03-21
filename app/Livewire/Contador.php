<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tarea;

class Contador extends Component
{
    /**
     * @var Tarea
     */
    public $tarea;
    public $numero = 0;

    public function incrementar(){
        $this->numero++;
    }

    public function mount(){
        $this->tarea = Tarea::get();
    }
    public function render()
    {
        return view('livewire.contador');
    }
}

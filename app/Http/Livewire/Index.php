<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $titulo;

    public function render()
    {
        $this->titulo = "Inicio";
        return view('livewire.index');
    }
}

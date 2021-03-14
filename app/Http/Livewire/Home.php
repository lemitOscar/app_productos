<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $titulo;

    public function render()
    {
        $this->titulo = "Home";
        return view('livewire.home');
    }
}

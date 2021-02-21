<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];

    public $buscar;
    public $titulo;

    public function render()
    {
        $this->titulo = "Usuarios";
        $buscarSQL = '%'.$this->buscar.'%';
        $users = User::orderby('name')
            ->where('name','like',$buscarSQL)
            ->orwhere('email','like',$buscarSQL)
            ->paginate(3);
                
        return view('livewire.users-table', compact('users'));
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $titulo;
    public $filtro = 'name';
    public $orden = 'ASC';

    public function render()
    {
        $this->titulo = "Usuarios";
        $buscarSQL = '%'.$this->buscar.'%';
        $users = User::orderby('name', $this->orden)
            ->where($this->filtro,'like',$buscarSQL)
            ->paginate(5);
        
        return view('livewire.admin.users-index', compact('users'));
    }
}

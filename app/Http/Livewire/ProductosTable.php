<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ProductosTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $titulo;
    public $filtro = 'codigo';
    public $orden = 'ASC';

    public function render()
    {
        $this->titulo = "Productos";
        $buscarSQL = '%'.$this->buscar.'%';
        $prods = Producto::orderby('codigo', $this->orden)
            ->where($this->filtro,'like',$buscarSQL)
            ->paginate(5);

        $users = User::all();
            
        return view('livewire.productos-table', compact(['prods', 'users']));
    }
}

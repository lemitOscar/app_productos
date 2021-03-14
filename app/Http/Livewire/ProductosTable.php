<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ProductosTable extends Component
{

    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];

    public $buscar;
    public $titulo;

    public $filtro = 'codigo';

    public function render()
    {
        $this->titulo = "Productos";
        $buscarSQL = '%'.$this->buscar.'%';
        $prods = Producto::orderby('codigo')
            ->where($this->filtro,'like',$buscarSQL)
            //->orwhere('nombre','like',$buscarSQL)
            ->paginate(5);
            
        return view('livewire.productos-table', compact('prods'));
    }
}

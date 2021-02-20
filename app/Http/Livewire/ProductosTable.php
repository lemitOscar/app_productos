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

    public function render()
    {
        $this->titulo = "Productos";
        $buscarSQL = '%'.$this->buscar.'%';
        $prods = Producto::orderby('codigo')
            ->where('codigo','like',$buscarSQL)
            ->orwhere('descripcion','like',$buscarSQL)
            ->paginate(3);
            
        return view('livewire.productos-table', compact('prods'));
    }
}

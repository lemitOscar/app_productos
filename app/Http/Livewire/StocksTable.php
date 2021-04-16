<?php

namespace App\Http\Livewire;

use App\Models\Stock;
use Livewire\Component;
use Livewire\WithPagination;

class StocksTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $titulo;
    public $filtro = 'nombre';
    public $orden = 'ASC';

    public function render()
    {
        $this->titulo = "Almacenes";
        $buscarSQL = '%'.$this->buscar.'%';
        $stocks = Stock::orderby('id', $this->orden)
            ->where($this->filtro,'like',$buscarSQL)
            ->paginate(5); 

        return view('livewire.stocks-table', compact('stocks'));
    }
}

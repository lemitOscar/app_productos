<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Stock;
use Livewire\Component;
use Livewire\WithPagination;

class InventoriesTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $filtro = 'codigo';
    public $orden = 'ASC';
    public $titulo;
    public Stock $stock;

    /*public function increment(){$this->count++;}
    public function decrement(){$this->count--;}*/

    public function mount($idver){
        $this->stock = Stock::find($idver);
    }

    public function render()
    {
        $this->titulo = "Inventarios";
        $buscarSQL = '%'.$this->buscar.'%';
        $inventories = Inventory::orderby('codigo')
            ->orwhere($this->filtro,'like',$buscarSQL)
            ->where('stock_id', '=', $this->stock->id)
            ->paginate(5); 

        return view('livewire.inventories-table', compact('inventories'));
    }
}

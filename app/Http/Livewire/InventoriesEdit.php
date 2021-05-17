<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Stock;
use Hamcrest\Core\IsNot;
use Livewire\Component;
use Livewire\WithPagination;

class InventoriesEdit extends Component
{
    use WithPagination;
    public Inventory $inventory;
    public Stock $stock;

    public $titulo;

    protected $rules = [ 
        'inventory.codigo' => 'required|min:6|max:10',
        'inventory.nombre' => 'required|max:50',
        'inventory.descripcion' => 'required|max:50',

        'inventory.stock_id' => 'required|numeric',
        'inventory.category_id' => 'required|numeric',
    ];

    public function mount($id = null, $ideliminar = null, $idver = null){
        if(is_null($id) && is_null($ideliminar) && !is_null($idver)){
            $this->titulo = "Nuevo Inventario";
            $this->stock = Stock::find($idver);
            $this->inventory = new Inventory();
        }elseif(is_null($id) && !is_null($idver)){
            $this->stock = Stock::find($idver);
            $this->inventory = Inventory::find($ideliminar);
            $this->inventory->delete();
            return redirect()->route('inventories.show', $this->stock->id);
        }else{
            $this->titulo = "Editar Inventario";
            $this->stock = Stock::find($idver);
            $this->inventory = Inventory::find($id);
        }
    }

    public function render()
    {
        $stocks = Stock::all()->where('id', '=', $this->stock->id);
        $categories = Category::all()->sortBy('nombre', SORT_NATURAL);
        return view('livewire.inventories-edit', compact('stocks', 'categories'));
    }

    public function guardar(){
        
        $this->validate();

        $this->inventory->save();

        return redirect()->route('inventories.show', $this->stock->id);
    }
}

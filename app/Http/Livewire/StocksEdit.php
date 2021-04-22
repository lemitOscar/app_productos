<?php

namespace App\Http\Livewire;

use App\Models\State;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class StocksEdit extends Component
{
    use WithPagination;
    public Stock $stock;

    public $titulo;

    protected $rules = [ 
        'stock.nombre' => 'required|max:50',
        'stock.telefono' => 'required|max:50',
        'stock.pais' => 'required|max:50',
        'stock.municipio' => 'required|max:50',
        'stock.localidad' => 'required|max:50',
        'stock.codigo_postal' => 'required|numeric',
        'stock.calle' => 'required|max:50',
        'stock.num_ext' => 'required|numeric',
        'stock.num_int' => 'required|numeric',

        'stock.state_id' => 'required|numeric',
    ];

    public function mount($id = null, $ideliminar = null){
        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = "Nuevo Almacen";
            $this->stock = new Stock();
        }elseif(is_null($id)){
            $this->stock = Stock::find($ideliminar);
            $this->stock->delete();
            return redirect()->route('stocks');
        }else{
            $this->titulo = "Editar Almacen";
            $this->stock = Stock::find($id);
        }
    }

    public function render()
    {
        $states = State::all()->sortBy('nombre', SORT_NATURAL);
        return view('livewire.stocks-edit', compact('states'));
    }

    public function guardar(){
        
        $this->validate();
        if(is_null($this->stock->user_id)){
            $this->stock->user_id = Auth::user()->id;
        }

        $this->stock->save();

        return redirect()->route('stocks');
    }
}

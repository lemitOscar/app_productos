<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductosEdit extends Component
{
    public Producto $prod;
    public $titulo;

    protected $rules = [
        'prod.codigo' => 'required|min:6|max:10', 
        'prod.descripcion' => 'required|max:50',
        'prod.cantidad' => 'required|numeric',
        'prod.precio' => 'required|numeric'
    ];

    public function mount($id = null, $ideliminar = null){
        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = "Nuevo Producto";
            $this->prod = new Producto();
        }elseif(is_null($id)){
            $this->prod = Producto::find($ideliminar);
            $this->prod->delete();
            return redirect()->route('productos');
        }else{
            $this->titulo = "Editar Producto";
            $this->prod = Producto::find($id);
        }
    } 

    public function render()
    {
        return view('livewire.productos-edit');
    }

    public function guardar(){
        
        $this->validate();

        $this->prod->save();

        return redirect()->route('productos');
    }
}

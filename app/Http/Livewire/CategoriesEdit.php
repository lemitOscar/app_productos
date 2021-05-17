<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesEdit extends Component
{
    public Category $category;
    public $titulo;

    protected $rules = [ 
        'category.nombre' => 'required|max:50',
    ];

    public function mount($id = null, $ideliminar = null){
        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = "Nueva Categoria";
            $this->category = new Category();
        }elseif(is_null($id)){
            $this->category = Category::find($ideliminar);
            $this->category->delete();
            return redirect()->route('categories');
        }else{
            $this->titulo = "Editar Categoria";
            $this->category = Category::find($id);
        }
    }

    public function render()
    {
        return view('livewire.categories-edit');
    }

    public function guardar(){
        $this->validate();

        $this->category->save();

        return redirect()->route('categories');
    }
}

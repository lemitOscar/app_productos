<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $titulo;
    public $filtro = 'nombre';
    public $orden = 'ASC';

    public function render()
    {
        $this->titulo = "Categorias";
        $buscarSQL = '%'.$this->buscar.'%';
        $categories = Category::orderby('id', $this->orden)
            ->where($this->filtro,'like',$buscarSQL)
            ->paginate(5); 

        return view('livewire.categories-table', compact('categories'));
    }
}

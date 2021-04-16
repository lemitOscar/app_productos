<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomersTable extends Component
{
    use WithPagination;

    protected $queryString = ['buscar' => ['except' => '']];
    public $buscar;
    public $titulo;
    public $filtro = 'nombre';
    public $orden = 'ASC';

    public function render()
    {
        $this->titulo = "Clientes";
        $buscarSQL = '%'.$this->buscar.'%';
        $customers = Customer::orderby('id', $this->orden)
            ->where($this->filtro,'like',$buscarSQL)
            ->paginate(5); 

        return view('livewire.customers-table', compact('customers'));
    }
}

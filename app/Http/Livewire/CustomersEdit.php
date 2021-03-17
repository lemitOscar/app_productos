<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomersEdit extends Component
{
    public Customer $customer;

    public $titulo;

    protected $rules = [ 
        'customer.nombre' => 'required|max:50',
        'customer.email' => 'required|max:50',
        'customer.telefono' => 'required|max:50',
    ];

    public function mount($id = null, $ideliminar = null ){
        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = "Nuevo Cliente";
            $this->customer = new Customer();
        }elseif(is_null($id)){
            $this->customer = Customer::find($ideliminar);
            $this->customer->delete();
            return redirect()->route('customers');
        }else{
            $this->titulo = "Editar Cliente";
            $this->customer = Customer::find($id);
        }
    } 

    public function render()
    {
        return view('livewire.customers-edit');
    }

    public function guardar(){
        
        $this->validate();

        $this->customer->save();

        return redirect()->route('customers');
    }
}

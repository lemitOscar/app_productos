<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomersEdit extends Component
{
    
    public Customer $customer;

    public $titulo;

    protected $rules = [ 
        'customer.nombre' => 'required|max:50',
        'customer.email' => 'required|max:50',
        'customer.telefono' => 'required|max:50',
        'customer.pais' => 'required|max:50',
        'customer.municipio' => 'required|max:50',
        'customer.localidad' => 'required|max:50',
        'customer.codigo_postal' => 'required|numeric',
        'customer.calle' => 'required|max:50',
        'customer.num_ext' => 'required|numeric',
        'customer.num_int' => 'required|numeric',

        'customer.state_id' => 'required|numeric',
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
        $states = State::all()->sortBy('nombre', SORT_NATURAL);
        return view('livewire.customers-edit', compact('states'));
    }

    public function guardar(){
        
        $this->validate();
        if(is_null($this->customer->user_id)){
            $this->customer->user_id = Auth::user()->id;
        }

        $this->customer->save();

        return redirect()->route('customers');
    }
}

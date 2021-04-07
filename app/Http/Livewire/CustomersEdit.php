<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CustomersEdit extends Component
{
    
    public Customer $customer;

    public $titulo;

    protected $rules = [ 
        'customer.nombre' => 'required|max:50',
        'customer.email' => 'required|max:50',
        'customer.telefono' => 'required|max:50',
        'customer.user_id' => 'required|numeric',
        'customer.address_id' => 'required|numeric',
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
        $users = User::all();

        return view('livewire.customers-edit', compact('users'));
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

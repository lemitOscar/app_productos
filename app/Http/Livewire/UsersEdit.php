<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UsersEdit extends Component
{
    public User $user;
    public $titulo;

    protected $rules = [
        'user.name' => 'required|max:255', 
        'user.email' => 'required|max:255',
        
    ];

    public function mount($id = null, $ideliminar = null){
        if(is_null($id) && is_null($ideliminar)){
            $this->titulo = "Nuevo Usuario";
            $this->user = new User();
        }elseif(is_null($id)){
            $this->user = User::find($ideliminar);
            $this->user->delete();
            return redirect()->route('usuarios');
        }else{
            $this->titulo = "Editar Usuario";
            $this->user = User::find($id);
        }
    }

    public function render(User $user)
    {
        $roles = Role::all();
        return view('livewire.users-edit', compact('user', 'roles'));
    }

    public function guardar(Request $request, User $user){
        //$this->validate();

        $user->roles()->sync($request->roles);
        
        //$this->user->save();

        return redirect()->route('user.edit', $user)->with('info', 'Rol asignado');

        //return redirect()->route('usuarios');
    }
}

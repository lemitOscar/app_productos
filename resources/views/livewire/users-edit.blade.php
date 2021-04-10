@section('titulo')
      {{$titulo}}
@endsection
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<div class="w-screen">
    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">  
                <!-- Formulario Editar -->
                <section class="max-w-4xl p-6 mx-auto bg-white rounded-md dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Información del Usuario</h2>  
                    
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="name">Nombre del Usuario</label>
                            <input id="name" type="text" name="name" wire:model='user.name' class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" disabled> 
                        </div>
      
                        <div>
                          <label class="text-gray-700 dark:text-gray-200" for="email">Correo del Usuario</label>
                          <input id="email" type="email" name="email" wire:model='user.email' class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" disabled>
                        </div>
                    
                    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Roles de Usuario</h2>

                    
                    {!! Form::model($user, ['route' => ['user.edit', $user], 'method' => 'up']) !!}
                        @foreach ($roles as $role)
                        <div>
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'appearance-none checked:bg-blue-600 checked:border-transparent']) !!}
                                {{$role->name}}
                            </label>
                        </div>
                        @endforeach
                        <div class="flex justify-end mt-6">
                            <span class="hidden sm:block" >
                              <button class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                              <!-- Heroicon name: solid/pencil -->
                                  <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="rgba(255, 255, 255, var(--tw-bg-opacity))" aria-hidden="true">
                                      <path xmlns="http://www.w3.org/2000/svg" d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"/>
                                  </svg>
                                  Guardar
                              </button>
                          </span>
                        </div>
                        {!! Form::submit('Guardar', ['class' => 'inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600']) !!}
                    {!! Form::close() !!}

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

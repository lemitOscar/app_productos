@extends('adminlte::page')

@section('title', 'Agregar Cliente')

@section('content_header')
    <h1>Agregar Cliente</h1>
@stop

@section('content')
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Información del Cliente</h2>
    {!! Form::open(['route' => 'admin.customers.store']) !!}
    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-4">
        <div class="form-group">
            {!! Form::label('nombre', 'Nombre', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('nombre', null, ['placeholder' => 'Nombre', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::email('email', null, ['placeholder' => 'Correo', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefono', 'Teléfono', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('telefono', null, ['placeholder' => 'Teléfono', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pais', 'País', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('pais', null, ['placeholder' => 'País', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('estado', 'Estado', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('estado', null, ['placeholder' => 'Estado', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('municipio', 'Municipio', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('municipio', null, ['placeholder' => 'Municipio', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('localidad', 'Localidad', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('localidad', null, ['placeholder' => 'Localidad', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('codigo_postal', 'Código Postal', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::number('codigo_postal', null, ['placeholder' => 'Código Postal', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('calle', 'Calle', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::text('calle', null, ['placeholder' => 'Calle', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('num_ext', 'Núm. Ext.', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::number('num_ext', null, ['placeholder' => 'Núm. Ext.', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('num_int', 'Núm. Int.', ['class' => 'text-gray-700 dark:text-gray-200']) !!}
            {!! Form::number('num_int', null, ['placeholder' => 'Núm. Int.', 'class' => 'block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring']) !!}
        </div>
    </div>
    <div class="flex justify-end mt-6">
        <span class="hidden sm:block" >
          <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
          <!-- Heroicon name: solid/pencil -->
              <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="rgba(255, 255, 255, var(--tw-bg-opacity))" aria-hidden="true">
                  <path xmlns="http://www.w3.org/2000/svg" d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"/>
              </svg>
              Guardar
          </button>
      </span>
    </div>
    {!! Form::close() !!}
</section>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
@stop
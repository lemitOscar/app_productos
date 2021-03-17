@extends('adminlte::page')

@section('title', 'Punto de Venta')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
            '¡Bienvenido!',
            'Administrador',
            'success'
        )
    </script>
@stop
@extends('adminlte::page')

@section('title', 'Punto de Venta')

@section('content_header')
    <h1>Productos</h1>
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
            'Good job!',
            'You clicked the button!',
            'success'
        )
    </script>
@stop
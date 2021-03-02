<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    @php
        $color = 'red';    
    @endphp
    <body>
        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4">
                <x-slot name="title">
                    Titulo 1
                </x-slot>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat voluptate, deleniti recusandae quia eaque architecto ipsam officia qui quibusdam! Vel cum facilis earum reprehenderit harum esse repellendus voluptatem autem ea!
            </x-alert>

            <x-alert2 color="red" class="mb-4">
                <x-slot name="title">
                    Titulo de Prueba
                </x-slot>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod iure eos saepe sapiente velit cumque eligendi doloremque provident animi perferendis, cum perspiciatis magni ut assumenda quibusdam, corrupti repudiandae error molestias?
            </x-alert2>
        </div>
    </body>
</html>

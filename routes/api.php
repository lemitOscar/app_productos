<?php

use App\Http\Livewire\ProductosEdit;
use App\Http\Livewire\ProductosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/listar_productos', [ProductosTable::class, 'listar_productos']);//->middleware('auth:sanctum');
Route::get('/guardar_productos', [ProductosEdit::class, 'guardar_productos']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

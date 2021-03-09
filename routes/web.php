<?php

use App\Http\Controllers\AvisosController;
use App\Http\Controllers\ContactoController;
use App\Http\Livewire\ProductosEdit;
use App\Http\Livewire\ProductosTable;
use App\Http\Livewire\UsersEdit;
use App\Http\Livewire\UsersTable;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', PrincipalController::class);

/*Rutas de Productos*/
Route::get('/Productos', ProductosTable::class)
    ->middleware('auth')
    ->name('productos');

Route::get('/Producto/editar/{id}', ProductosEdit::class)
    ->middleware('auth')
    ->where('id', '[0-9]+')
    ->name('producto.edit');

Route::get('/Producto/eliminar/{ideliminar}', ProductosEdit::class)
    ->middleware('auth')
    ->where('ideliminar', '[0-9]+')
    ->name('producto.delete');

Route::get('/Producto/new', ProductosEdit::class)
    ->middleware('auth')
    ->name('producto.new');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/Productos', ProductosTable::class)
    ->name('productos');

/*Rutas de Usuarios */
Route::get('/Usuarios', UsersTable::class)
    ->middleware('auth')
    ->name('usuarios');

Route::get('/Usuarios/editar/{id}', UsersEdit::class)
    ->middleware('auth')
    ->where('id', '[0-9]+')
    ->name('usuario.edit');

Route::get('/Usuarios/eliminar/{ideliminar}', UsersEdit::class)
    ->middleware('auth')
    ->where('ideliminar', '[0-9]+')
    ->name('usuario.delete');

Route::get('/Usuarios/new', UsersEdit::class)
    ->middleware('auth')
    ->name('usuario.new');


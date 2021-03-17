<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use Doctrine\DBAL\Schema\Index;
use App\Http\Controllers\Admin\CustomerController;

Route::get('', [HomeController::class, 'index'])->name('index');

Route::resource('customers', CustomerController::class)->names('admin.customers');
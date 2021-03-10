<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use Doctrine\DBAL\Schema\Index;

Route::get('/', [HomeController::class, 'index'])->name('index');
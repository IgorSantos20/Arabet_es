<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
});


Route::get('/cadastro', [AuthController::class, 'create'])->name('cadastro.index');
Route::post('/cadastro', [AuthController::class, 'store'])->name('cadastro.store');
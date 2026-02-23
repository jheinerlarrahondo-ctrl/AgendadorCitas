<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/Index', [CitaController::class, 'index'])->name('Index');

// Mostrar formulario
Route::get('/citas', [CitaController::class, 'create'])->name('citas.create');

// Guardar formulario
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');

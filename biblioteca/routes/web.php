<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProfileController;
use App\Models\Ejemplar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('clientes', ClienteController::class);
Route::resource('libros', LibroController::class);
Route::resource('ejemplares', EjemplarController::class);


Route::get('/ejemplares/index/{id}', [EjemplarController::class, 'index'])->name('ejemplares.index');
require __DIR__.'/auth.php';

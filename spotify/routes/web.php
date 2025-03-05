<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\CancionController;
use App\Http\Controllers\ProfileController;
use App\Models\Artista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

Route::resource('artistas', ArtistaController::class);
Route::resource('albumes', AlbumController::class);
Route::resource('canciones', CancionController::class);

Route::get('artistas/buscar', function(Request $request){
    // dd($request->all()); // Esto debería mostrar todos los parámetros de la solicitud
    $buscar = $request->input('dato');
    $artistas = Artista::where('nombre', 'LIKE', "%{$buscar}%")->get();
    // dd($artistas->isEmpty());

    return view('artistas.index', ['artistas' => $artistas]);
})->name('artistas.buscar');

// Si usas un controlador
// Route::get('artistas/buscar', [ArtistaController::class, 'buscar'])->name('artistas.buscar');

require __DIR__.'/auth.php';

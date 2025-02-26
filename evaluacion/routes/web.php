<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Models\Alumno;
use App\Models\Asignatura;
use App\Models\Evaluacion;
use App\Models\Nota;
use Illuminate\Http\Request;
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

Route::resource('alumnos', AlumnoController::class);
Route::resource('notas', NotaController::class);

Route::get('/notas/ver/{alumno}', function (Alumno $alumno) {

    $evaluaciones = Evaluacion::all();
    $asignaturas = Asignatura::all();

    return view('alumnos.notas', [
        'alumno' => $alumno,
        'evaluaciones' => $evaluaciones,
        'asignaturas' => $asignaturas
    ]);
})->name('alumnos.notas');

Route::get('/notas/cambiar/{nota}', function(Nota $nota){

    return view('alumnos.cambiar',['nota'=>$nota]);
})->name('alumnos.cambiar');

Route::put('/notas/cambiar/{nota}', function(Request $request, Nota $nota){
    $validated = $request->validate([
        'nota' => 'required|numeric|min:0|max:10'
    ]);
    $nota->fill($validated);
    $nota->save();
    session()->flash('exito', 'Nota modificado correctamente.');
    return redirect()->route('alumnos.index');
})->name('alumnos.actualizar');

require __DIR__ . '/auth.php';

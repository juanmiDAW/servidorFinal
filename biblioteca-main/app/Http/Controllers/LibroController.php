<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('libros.index', ['libros'=>Libro::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.max' => 'El título debe contener menos de 255 caracteres.',
            'autor.required' => 'El autor es obligatorio.',
            'autor.max' => 'El autor debe contener menos de 255 caracteres.',
        ]);
        Libro::create($validated);
        session()->flash('exito', 'Libro creado correctamente.');
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libros.show', ['libro'=>$libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit', [
            'libro'=>$libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ], [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.max' => 'El título debe contener menos de 255 caracteres.',
            'autor.required' => 'El autor es obligatorio.',
            'autor.max' => 'El autor debe contener menos de 255 caracteres.',
        ]);
        $libro->fill($validated);
        $libro->save();
        session()->flash('exito', 'Libro modificado correctamente.');
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        foreach ($libro->ejemplares as $ejemplar) {
            $ejemplar->clientes()->detach();
        }
        $libro->ejemplares()->delete();
        $libro->delete();
        return redirect()->route('libros.index');
    }
}

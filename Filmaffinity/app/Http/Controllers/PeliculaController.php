<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('peliculas.index', ['peliculas'=>Pelicula::with('ficha')->get()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);
        $ficha = new Ficha([
            'titulo' => $validated ['titulo'],
            'descripcion' => $validated ['descripcion'],
        ]);

        $pelicula = Pelicula::create([
            'autor'=>$validated['autor']
        ]);

        $ficha->fichable()->associate($pelicula); 
        $ficha->save();
        session()->flash('exito', 'Pelicula creada correctamente.');
        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}

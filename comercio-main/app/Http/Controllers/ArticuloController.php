<?php

namespace App\Http\Controllers;

use App\Generico\Carrito;
use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articulos.index', [
            'articulos' => Articulo::all(),
            'carrito' => Carrito::carrito(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo' => 'required|max_digits:6|unique:articulos,codigo',
            'denominacion' => 'required|string|max:255',
            'precio' => 'required|decimal:2',
        ]);
        Articulo::create($validated);
        session()->flash('exito', 'Artículo creado correctamente.');
        return redirect()->route('articulos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        return view('articulos.show', [
            'articulo' => $articulo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulo $articulo)
    {
        return view('articulos.edit', [
            'articulo' => $articulo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulo $articulo)
    {
        $validated = $request->validate([
            'codigo' => [
                'required',
                'max_digits:6',
                Rule::unique('articulos')->ignore($articulo),
            ],
            'denominacion' => 'required|string|max:255',
            'precio' => 'required|decimal:2',
        ]);
        $articulo->fill($validated);
        $articulo->save();
        session()->flash('exito', 'Artículo modificado correctamente.');
        return redirect()->route('articulos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->facturas()->detach();
        $articulo->delete();
        return redirect()->route('articulos.index');
    }
}

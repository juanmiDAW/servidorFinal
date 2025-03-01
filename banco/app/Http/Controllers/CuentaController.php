<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cuentas.index', ['cuentas' => Cuenta::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //s
    }

    /**
     * Display the specified resource.
     */

     /**primero formamos la consulta y luego con el metodo get la ejecutamos, y obtenemos los resultados */
    public function show(Cuenta $cuenta)
    {
        $movimientos = $cuenta->movimientos()->orderBy('created_at','asc');

        return view('cuentas.show', [
            'cuenta' => $cuenta,
            'movimientos' => $movimientos->get(),
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuenta $cuenta)
    {
        //
    }
}

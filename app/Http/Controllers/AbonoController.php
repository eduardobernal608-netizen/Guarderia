<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbonoController extends Controller
{
    public function index()
    {
        $abonos = Abono::all();
        return view('abonos.index', compact('abonos'));
    }

    public function create()
    {
        return view('abonos.create');
    }

    public function store(Request $request)
    {
    Abono::create([
        'cantidad' => $request->cantidad,
        'fecha' => $request->fecha,
        'id_regcuenta' => $request->id_regcuenta
    ]);

    return redirect()->route('abonos.index');
    }

    public function edit(Abono $abono)
    {
        return view('abonos.edit', compact('abono'));
    }

    public function update(Request $request, Abono $abono)
    {
        $abono->update($request->all());
        return redirect()->route('abonos.index');
    }

    public function destroy(Abono $abono)
    {
        $abono->delete();
        return redirect()->route('abonos.index');
    }
}
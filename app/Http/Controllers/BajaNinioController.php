<?php

namespace App\Http\Controllers;

use App\Models\BajaNinio; // Asegúrate que el modelo se llame así
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BajaNinioController extends Controller
{
    public function index()
    {
        $bajas = BajaNinio::all();
        return view('bajas_ninios.index', compact('bajas'));
    }

    public function create()
    {
        return view('bajas_ninios.create');
    }

    public function store(Request $request)
    {
        BajaNinio::create($request->all());
        return redirect()->route('bajas_ninios.index');
    }

    public function edit($id)
    {
        $baja = BajaNinio::findOrFail($id);
        return view('bajas_ninios.edit', compact('baja'));
    }

    public function update(Request $request, $id)
    {
        $baja = BajaNinio::findOrFail($id);
        $baja->update($request->all());
        return redirect()->route('bajas_ninios.index');
    }

    public function destroy($id)
    {
        $baja = BajaNinio::findOrFail($id);
        $baja->delete();
        return redirect()->route('bajas_ninios.index');
    }
}
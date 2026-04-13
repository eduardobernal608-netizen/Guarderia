<?php

namespace App\Http\Controllers;

use App\Models\Familiar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamiliarController extends Controller
{
    public function index()
    {
        $familiares = Familiar::all();
        return view('familiares.index', compact('familiares'));
    }

    public function create()
    {
        return view('familiares.create');
    }

    public function store(Request $request)
    {
        Familiar::create($request->all());
        return redirect()->route('familiares.index');
    }

    public function edit(Familiar $familiar)
    {
        return view('familiares.edit', compact('familiar'));
    }

    public function update(Request $request, Familiar $familiar)
    {
        $familiar->update($request->all());
        return redirect()->route('familiares.index');
    }

    public function destroy(Familiar $familiar)
    {
        $familiar->delete();
        return redirect()->route('familiares.index');
    }
}
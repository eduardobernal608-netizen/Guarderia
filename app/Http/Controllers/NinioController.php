<?php

namespace App\Http\Controllers;

use App\Models\Ninio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NinioController extends Controller
{
    public function index()
    {
        $ninios = Ninio::all();
        return view('ninios.index', compact('ninios'));
    }

    public function create()
    {
        return view('ninios.create');
    }

    public function store(Request $request)
    {
        Ninio::create($request->all());
        return redirect()->route('ninios.index');
    }

    public function edit(Ninio $ninio)
    {
        return view('ninios.edit', compact('ninio'));
    }

    public function update(Request $request, Ninio $ninio)
    {
        $ninio->update($request->all());
        return redirect()->route('ninios.index');
    }

    public function destroy(Ninio $ninio)
    {
        $ninio->delete();
        return redirect()->route('ninios.index');
    }
}
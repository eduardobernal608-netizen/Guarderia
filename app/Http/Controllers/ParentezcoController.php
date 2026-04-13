<?php

namespace App\Http\Controllers;

use App\Models\Parentezco;
use Illuminate\Http\Request;

class ParentezcoController extends Controller
{
    public function index()
    {
        $parentezcos = Parentezco::all();
        return view('parentezcos.index', compact('parentezcos'));
    }

    public function create()
    {
        return view('parentezcos.create');
    }

    public function store(Request $request)
    {
        Parentezco::create($request->all());
        return redirect()->route('parentezcos.index');
    }

    public function edit(Parentezco $parentezco)
    {
        return view('parentezcos.edit', compact('parentezco'));
    }

    public function update(Request $request, Parentezco $parentezco)
    {
        $parentezco->update($request->all());
        return redirect()->route('parentezcos.index');
    }

    public function destroy(Parentezco $parentezco)
    {
        $parentezco->delete();
        return redirect()->route('parentezcos.index');
    }
}
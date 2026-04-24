<?php

namespace App\Http\Controllers;

use App\Models\Abono;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbonoController extends Controller
{
    public function index()
    {
        /**
         *
         * SELECT
         * abonos.cantidad, abonos.fecha, personas.nom, registro_cuentas.cuenta
         * FROM abonos, registro_cuentas, familiares, ninios, personas
         * WHERE abonos.id_regcuenta = registro_cuentas.id_regcuenta
         * AND registro_cuentas.id_fam = familiares.id_fam
         * AND familiares.id_ninio = ninios.id_ninio
         * AND ninios.id_persona = personas.id_persona;
         */
       /* $abonos = Abono::join("registro_cuentas","registro_cuentas.id_regcuenta","abonos.id_regcuenta")
        ->join("familiares","familiares.id_fam", "registro_cuentas.id_fam")
        ->join("ninios","ninios.id_ninio","familiares.id_ninio")
        ->join("personas","personas.id_persona", "ninios.id_persona")
            ->select("abonos.id_abono","abonos.cantidad","abonos.fecha", "personas.nom as nombre", "registro_cuentas.cuenta")
        ->get();*/
        $abonos = Abono::join("registro_cuentas", "registro_cuentas.id_regcuenta", "abonos.id_regcuenta")
            ->join("familiares", "familiares.id_fam", "registro_cuentas.id_fam")
            ->join("ninios", "ninios.id_ninio", "familiares.id_ninio")
            ->join("personas", "personas.id_persona", "ninios.id_persona")
            ->join("personas as personas_tutor", "personas_tutor.id_persona", "familiares.id_persona")
            ->select(
                "abonos.id_abono",
                "abonos.cantidad",
                "abonos.fecha",
                "personas.nom as nombre_ninio",
                "personas_tutor.nom as nombre_tutor",
                "registro_cuentas.cuenta"
            )
            ->get();
   
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

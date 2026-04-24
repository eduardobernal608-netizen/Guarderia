<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    //
    protected $table = "centros";
    protected $primaryKey = 'id_centro';
    protected $fillable=["id_centro","nombre","costo"];
    public $timestamps = false;

    public function cantidad()
    {
       return $this->belongsTo("\App\Models\Ninio","id_centro","id_centro")->count();
    }
    public function sumaTotal()
    {
        return $this->join("ninios","ninios.id_centro","centros.id_centro")
            ->join("familiares","familiares.id_ninio","=","ninios.id_ninio")
            ->join("registro_cuentas","registro_cuentas.id_fam","=","familiares.id_fam")
            ->join("abonos","abonos.id_regcuenta","=","registro_cuentas.id_regcuenta")
            ->where("centros.id_centro",$this->id_centro)
            ->sum("abonos.cantidad");

    }
}

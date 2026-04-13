<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroCuenta extends Model
{
    //
    protected $table="registro_cuentas";
    protected $primaryKey = 'id_regcuenta';
    protected $fillable=["id_regcuenta","id_fam","cuenta"];
    public $timestamps = false;
}

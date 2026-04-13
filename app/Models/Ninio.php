<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ninio extends Model
{
    //
    protected $table="ninios";
    protected $primaryKey = 'id_ninio';
    protected $fillable=["id_ninio","matricula","fecha_ingreso","id_persona",  "id_centro"];
    public $timestamps = false;
}

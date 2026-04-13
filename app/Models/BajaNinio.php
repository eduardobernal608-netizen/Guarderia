<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BajaNinio extends Model
{
    protected $table = 'baja_ninios'; 

    protected $primaryKey = 'id_baja';

    
    protected $fillable = ['id_baja', 'id_ninio', 'motivo', 'fecha'];

    public $timestamps = false;
}
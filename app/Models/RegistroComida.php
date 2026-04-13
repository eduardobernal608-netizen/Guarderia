<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroComida extends Model
{
    
    protected $table = "registro_comidas"; 
    
    protected $primaryKey = 'id_registrocomida';
    
    
    protected $fillable = [
        "id_registrocomida", 
        "id_ninio", 
        "id_plato", 
        "fecha", 
        "cantidad"
    ];
    
    public $timestamps = false;

    protected $attributes = [
        'cantidad' => 0, // Esto evita que SQL truene si el campo llega vacío
    ];
}
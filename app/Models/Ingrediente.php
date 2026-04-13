<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    //
    protected $table="ingredientes";
    protected $primaryKey = 'id_ingrediente';
    protected $fillable=["  id_ingrediente "," nombre"];
    public $timestamps = false;
}

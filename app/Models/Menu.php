<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    protected $primaryKey = 'id';

    protected $fillable = [
        "id_menu",
        "id_plato",
        "id_ingrediente"
    ];

    public $timestamps = false;
}
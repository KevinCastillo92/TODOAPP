<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'fecha', 'descripcion', 'estatus', 'fecha_terminacion'
    ];
}

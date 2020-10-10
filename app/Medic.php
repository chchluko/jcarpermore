<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    //protected $primaryKey = 'iduser';
    protected $fillable = [
        'nombre',
        'paterno',
        'materno',
        'especialidad',
        'email',
        'telefono',
        'iduser'
    ];
}

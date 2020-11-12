<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono'];

    public function medics()
    {
        return $this->hasMany('App\Medic','iduser','iduser');
    }
}

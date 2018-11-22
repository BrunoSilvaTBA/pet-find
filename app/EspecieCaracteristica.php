<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecieCaracteristica extends Model
{
    protected $table = 'especie_caracteristicas';

    public function especieCaracteristicas()
    {
        return $this->hasMany('App\Caracteristica', 'id_caracteristica', 'caracteristica_id');
    }
}

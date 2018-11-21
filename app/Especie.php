<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $table = 'especies';
    protected $primaryKey = 'id_especie';

    public function caracteristicas()
    {
        return $this->belongsToMany('App\Caracteristica', 'especie_caracteristicas', 'especie_id', 'caracteristica_id');
    }

}

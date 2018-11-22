<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';
    protected $primaryKey = 'id_caracteristica';

    public function opcoes()
    {
        return $this->hasMany('App\CaracteristicaOpcao', 'caracteristica_id', 'id_caracteristica');
    }

}

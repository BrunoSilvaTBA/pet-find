<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaOpcao extends Model
{
    protected $table='caracteristica_opcoes';
    protected $primaryKey = 'id_opcao';

    public function label()
    {
        return $this->hasOne('App\Caracteristica','id_caracteristica', 'caracteristica_id');
    }
}

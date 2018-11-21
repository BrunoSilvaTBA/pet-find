<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetCaracteristica extends Model
{
    protected $table = 'pets_caracteristicas';
    protected $primaryKey = 'pets_caracteristicas';

    public function pet()
    {
        return $this->belongsTo('App\Pet', 'pet_id', 'id_pet');
    }



    public function detalhe()
    {
        return $this->hasOne('App\CaracteristicaOpcao','id_opcao', 'opcao_id');
    }
}

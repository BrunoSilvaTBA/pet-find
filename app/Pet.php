<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $primaryKey = 'id_pet';

    public function local()
    {
        return $this->hasOne('App\PetLocal', 'pet_id', 'id_pet');
    }

    public function caracteristicas()
    {
        return $this->hasMany('App\PetCaracteristica','pet_id','id_pet');
    }

    public function fotos()
    {
        return $this->hasMany('App\PetImagem', 'pet_id', 'id_pet');
    }
}

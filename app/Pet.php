<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 1 - Desaparecidos
 * 2 - Desaparecidos que foram encontrados
 * 3 - Para adoção
 * 4 - Pets que foram adotados *
 * */

class Pet extends Model
{
    protected $table = 'pets';
    protected $primaryKey = 'id_pet';

    protected $status_pet = [
        1 => ['label'=> 'Desaparecido', 'detalhe' => 'Pet desaparecido'],
        2 => ['label'=> 'Encontrado', 'detalhe' => 'Pet desaparecido mas foi encontrado'],
        3 => ['label'=> 'Adoção', 'detalhe' => 'Pet disponivel para adoção'],
        4 => ['label'=> 'Adotado', 'detalhe' => 'Pet que doi adotado'],
    ];

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

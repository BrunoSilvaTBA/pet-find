<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetImagem extends Model
{
    protected $table = 'pets_imagens';
    protected $primaryKey = 'id_pet_imagem';
    public $timestamps = false;
}

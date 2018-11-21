<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetLocal extends Model
{
    protected $table = 'pets_locais';
    protected $primaryKey = 'id_pet_local';
}

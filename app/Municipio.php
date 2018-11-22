<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'Id';

    public function bairros()
    {
        return $this->hasMany('App\Bairro', '');
    }
}

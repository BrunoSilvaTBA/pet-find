<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetContatoEncontrado extends Model
{
    protected $table = 'pets_contatos_encontrados';
    protected $primaryKey = 'id_pet_contato_encontrado';

    protected $fillable = ['nome', 'telefone', 'mensagem', 'pet_id'];

}

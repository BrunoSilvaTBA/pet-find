<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetComentario extends Model
{
    protected $table = "pets_comentarios";
    protected $primaryKey = 'id_pet_comentatio';
    protected $fillable = ['nome','email','mensagem','pet_id'];

    public function gravatar() {
        $s = 80;
        $d = 'mp';
        $r = 'g';
        $img = false;
        $atts = array();

        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $this->email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }
}

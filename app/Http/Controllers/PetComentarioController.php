<?php

namespace App\Http\Controllers;

use App\Http\Helps\MessageHelp;
use App\PetComentario;
use Illuminate\Http\Request;

class PetComentarioController extends Controller
{
    public function comentar(Request $request)
    {
        $dados = $request->only(['nome','email','mensagem','pet_id']);
        $stm = new PetComentario();

        MessageHelp::setErroMessage('Aconteceu algum erro ao comentar, tente novamente');

        if($stm->create($dados)){
            MessageHelp::setSuccessMessage('Comentário enviado com sucesso');
        }
        return redirect('pet/'. $request->pet_id . '#comentarios');

    }
}

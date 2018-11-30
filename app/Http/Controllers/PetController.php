<?php


namespace App\Http\Controllers;

use App\Caracteristica;
use App\Http\Helps\MessageHelp;
use App\Pet;
use App\PetCaracteristica;
use App\PetContatoEncontrado;
use App\PetImagem;
use App\PetLocal;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\ImageManagerStatic as Image;

class PetController extends Controller
{
    public function uploadFotoPet(Request $request)
    {
        //http://image.intervention.io/getting_started/installation
        $nomearquivo = rand() . $request->file('file')->extension();
        $data = Image::make($request->file('file'))
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->crop(550, 410)
            ->save(public_path('images/pets/' . $nomearquivo));

        return response()->json(['nome' => $nomearquivo]);
    }

    private function saveImagemPet(Pet $pet, $nome_imagem)
    {
        $stm = new PetImagem();
        $stm->pet_id = $pet->id_pet;
        $stm->nome_imagem = $nome_imagem;
        $stm->save();

        return $stm;
    }

    public function verPet(Pet $pet)
    {
        $outrosPets = Pet::where('status', 1)->where('id_pet', '<>', $pet->id_pet)->orderBy('id_pet', 'DESCT')->limit(3)->get();

        return view('site.pet-aberto')
            ->with('pet', $pet)
            ->with('outrosPets', $outrosPets);
    }

    public function petDesaparecidos()
    {
        $data = Pet::where('status', 1)
            ->orderBy('id_pet', 'DESC')
            ->paginate(15);


        return view('site.pets-desaparecidos')->with('pets', $data);
    }

    public function store(Request $request)
    {
        $names_imgs = explode(',', $request->names_imgs);

        if (!count($names_imgs)) {
            return response()->json(['retorno' => false]);
        }

        $stm = new Pet();
        $stm->nome_pet = $request->name;
        $stm->especie_id = $request->especie;
        $stm->raca_id = $request->raca;
        $stm->status = $request->status;
        $stm->detalhes = $request->detalhes;
        $stm->user_id = auth()->user()->id;
        $stm->save();


        $local = new PetLocal();

        $local->uf = $request->uf;
        $local->cidade = $request->cidade;
        $local->bairro = $request->bairro;
        $local->pet_id = auth()->user()->id;
        $local->save();

        $this->saveAllCaracteristica($stm, $request);

        if (count($names_imgs)) {
            foreach ($names_imgs as $imagem) {
                $this->saveImagemPet($stm, $imagem);
            }
        }
        return $stm;
    }

    private function saveAllCaracteristica(Pet $pet, Request $request)
    {
        if (count($request->caracteristica)) {
            foreach ($request->caracteristica as $caracteristica) {
                if($caracteristica != '00'){
                    $this->saveCaracteristicas($pet, $caracteristica);
                }
            }
        }
    }

    private function saveCaracteristicas(Pet $pet, $opcao_caracteristica = '', $label = '')
    {
        $caract = new PetCaracteristica();
        $caract->pet_id = $pet->id_pet;
        $caract->opcao_id = $opcao_caracteristica;
        $caract->label_caracteristica = $label;
        $caract->save();
        return $caract;
    }

    public function encontrei(Pet $pet)
    {
        MessageHelp::setErroMessage('Aconteceu algum em executar esta ação');

        if ($pet->user_id == auth()->user()->id && $pet->status == 1) {
            $pet->status = 2;
            $pet->save();
            MessageHelp::setSuccessMessage('Parabéns, ficamos felizes em saber que você reencontrou seu PET que é tão amado!');
        }
        return redirect()->route('painel');
    }

    //página pet aberto, formulário Encontrei este PET
    public function enviarMensagemPetEncontrado(Request $request)
    {
        $data = $request->only(['nome', 'telefone', 'mensagem', 'pet_id']);
        $retorno = PetContatoEncontrado::create($data);

        $flag = $retorno ? true : false;

        return response()->json(['retorno' => $flag]);
    }

    public function listaContatos(Request $request)
    {
        $contato = Pet::find(Crypt::decryptString($request->pet));
        return \response()->json($contato->contatos);
    }
}

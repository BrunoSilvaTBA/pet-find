<?php


namespace App\Http\Controllers;

use App\Pet;
use App\PetCaracteristica;
use App\PetImagem;
use App\PetLocal;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PetController extends Controller
{
    public function uploadFotoPet(Request $request)
    {
        //http://image.intervention.io/getting_started/installation
        $nomearquivo = rand() . '.jpg';
        $data = Image::make($request->file('file'))
            ->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->crop(550, 400)
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

    public function verPet(Request $request)
    {
        return view('site.pet-aberto');
    }

    public function petsPerdidos()
    {
        return view('site.pets-perdidos');
    }

    public function store(Request $request)
    {
        $stm = new Pet();
        $stm->nome_pet = $request->name;
        $stm->especie_id = $request->especie;
        $stm->raca_id = $request->raca;
        $stm->user_id = auth()->user()->id;
        $stm->save();


        $local = new PetLocal();

        $local->uf = $request->uf;
        $local->cidade = $request->cidade;
        $local->bairro = $request->bairro;
        $local->pet_id = auth()->user()->id;
        $local->save();

        $this->saveAllCaracteristica($stm, $request);


        $names_imgs = explode(',',$request->names_imgs);

        if(count($names_imgs)) {
            foreach ($names_imgs as $imagem) {
                $this->saveImagemPet($stm, $imagem);
            }
        }

        return $stm;

    }

    private function saveAllCaracteristica(Pet $pet, Request $request)
    {
        foreach ($request->caracteristica as $caracteristica) {
            $this->saveCaracteristicas($pet, $caracteristica);
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
}

<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class PainelUsuarioController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->middleware('auth');
        $this->data = new \stdClass();
    }

    public function index()
    {

        $this->data->meus_pets = Pet::where('user_id', auth()->user()->id)->get();

        return view('painel.index')->with('data', $this->data);
    }

    public function cadastrarPetDesaparecido()
    {
        return view('painel.cadastropet')->with('status', 1);
    }

}

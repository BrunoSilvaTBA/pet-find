<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = new \stdClass();
        $pets->desaparecidos = Pet::where('status', 1)->limit(6)->orderBy('id_pet', 'DESC')->get();
       //dd($pets);

        return view('site.index')->with('pets', $pets);
    }
    public function contato()
    {
        return view('site.contato');
    }


    public function sobre()
    {
        return view('site.sobre');
    }

    public function cadastro()
    {
        return view('site.cadastro');
    }

    public function adote()
    {
        return view('site.adote');
    }

}

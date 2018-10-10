<?php

namespace App\Http\Controllers;

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
        return view('site.index');
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

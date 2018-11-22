<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use \Illuminate\Session\Middleware\StartSession;
use App\Http\Helps\MessageHelp;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);
        MessageHelp::setSuccessMessage('Cadastrado com sucesso!');
        return redirect()->route('cadastro');

    }

    public function logar(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('painel');
        }

        MessageHelp::setErroMessage('Confira seus dados e tente novamente');

        return redirect()->route('cadastro');
    }
}

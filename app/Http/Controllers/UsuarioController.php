<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = encrypt($request->password);

        $stm = User::create($data);
        dd($stm);
    }
}

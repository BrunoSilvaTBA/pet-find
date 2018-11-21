<?php

namespace App\Http\Controllers;

use App\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    public function getBairrosByUFAndCode(Request $request)
    {
        return response()->json(Bairro::where('Uf', $request->uf)->where('Codigo', 'like', '%' . $request->code . '%')->select('Id', 'Nome')->get());
    }
}

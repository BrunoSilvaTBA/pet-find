<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function getMunicipiosByUF(Request $request)
    {
        return response()->json(Municipio::where('Uf', $request->uf)->select('Codigo', 'Nome')->get());
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Raca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RacaController extends Controller
{
    public function getRacas(Request $request)
    {
        $data = Raca::where('especie_id', $request->especie)->orderBy('nome_raca', 'DESC')->get();
        return response()->json($data);
    }
}

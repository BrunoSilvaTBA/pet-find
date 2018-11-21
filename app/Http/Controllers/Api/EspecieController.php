<?php

namespace App\Http\Controllers\Api;

use App\Especie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EspecieController extends Controller
{
    public function getEspecies()
    {
        $data = Especie::orderBy('nome_especie', 'DESC')->get();
        return response()->json($data);
    }
}

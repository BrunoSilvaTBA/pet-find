<?php

namespace App\Http\Controllers\Api;

use App\Especie;
use App\EspecieCaracteristica;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EspecieCaracteristicaController extends Controller
{
    public function getCaracteristicas(Request $request)
    {
        $data = Especie::find($request->especie)->caracteristicas()->select('id_caracteristica', 'nome_caracteristica', 'tipo')->get();

        $retorno = [];

        foreach ($data as $id => $es) {
            $retorno[$id] = $es;
            if ($es->tipo == 2) {
                $retorno[$id]->opcoes = $es->opcoes()->select('id_opcao', 'nome_opcao')->orderBy('nome_opcao','ASC')->get();
            }
        }

        return $retorno;
    }
}

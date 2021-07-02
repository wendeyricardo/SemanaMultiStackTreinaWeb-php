<?php

namespace App\Http\Controllers;
use App\Services\ViaCEP;
use Illuminate\Http\Request;

class BuscaDiaristaCep extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ViaCEP $viaCEP)
    {
        $endereco = $viaCEP->buscar($request->cep);
        dd($endereco['ibge']);

        //entrada codigo ibge
        //lista de diaristas filtrada pelo código
    }
}

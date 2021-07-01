<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use Illuminate\Http\Request;

class DiaristaController extends Controller
{
    public function index()
    {
        $diaristas = Diarista::get();

        return view('index', [
            'diaristas' => $diaristas
        ]);
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $resquest)
    {
        $dados = $resquest->except('_token');
        $dados['foto_usuario'] = $resquest->foto_usuario->store('public');

        Diarista::create($dados);

        return redirect()->route('diaristas.index');
    }
}

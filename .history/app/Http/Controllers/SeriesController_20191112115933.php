<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        var_dump($request->session());
        exit();

        return view('series.index', compact('series', 'mensagem'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        $request->session()->put('mensagem', "Série {$serie->nome} criado com sucesso!");

        return redirect('/series');
    }
}

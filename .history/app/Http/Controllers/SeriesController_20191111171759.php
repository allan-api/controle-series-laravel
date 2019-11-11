<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Greys anatomy',
            'Lost', 
            'Agents of SHIELD'
        ];

        return view('series.index', compact('series')
            // ou 
            // return view('series.index', [
                // 'series' => $series
                // ]
        );
        // procura na pasta serie o arquivo index
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->nome;
        var_dump($nome);
    }
}
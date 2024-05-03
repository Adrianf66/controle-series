<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name_serie')->get();
       $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());

        return to_route('series.index')->with('mensagem.sucesso', "Series $serie->name_serie, cadastrado com sucesso!");

    }

    public function edit(Serie $id)
    {
        $serie = $id;

        return view('series.edit', compact('serie'));
    }
    public function update($id, Request $request)
    {
        $serie = Serie::find($id);
        $serie->update([
            'name_serie' => $request->name_serie,
            'total_episode' => $request->total_episode
        ]);
        return to_route('series.index')->with('mensagem.sucesso', 'Anime Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $series = Serie::find($id);
        $series->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->name_serie}' removida com sucesso!");
    }

}

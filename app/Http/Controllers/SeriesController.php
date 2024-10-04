<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::all();

       $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('series.index', compact('series'))->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           'name_serie' => ['required', 'min:3', 'max:100'],
            'number_season' => ['required', 'integer', 'min:1'],
            'number_episodes' => ['required', 'integer', 'min:1'],
        ]);

        $serie = Series::create([
            'name_serie' => $validated['name_serie'],
        ]);
        $seasons = [];

        for($i = 1; $i <= $validated['number_season']; $i++) {
            $seasons[] = [
                'serie_id' => $serie->id,
                'number_season' => $i,
            ];
        }
        Season::insert($seasons);
        $episodes = [];
        foreach($serie->seasons as $season) {
            for ($j = 1; $j <= $validated['number_episodes']; $j++){
                $episodes[] = [
                    'season_id' => $season->id,
                    'number_episodes' => $j,
                ];
            }
        }
        Episode::insert($episodes);

        return to_route('series.index')->with('mensagem.sucesso', "Series $serie->name_serie, cadastrado com sucesso!");

    }

    public function edit(Request $request, Series $serie)
    {
        $serie->update($request->all());

        return view('series.edit', compact('serie'));
    }
    public function update(Series $serie, Request $request)
    {
        $validated = $request->validate([
           'name_serie' => ['required', 'min:3', 'max:100'],
           'number_season' => ['required', 'integer', 'min:1'],
           'number_episodes' => ['required', 'integer', 'min:1'],
        ]);

        $serie->update([
            'name_serie' => $request->name_serie,

        ]);
        return to_route('series.index')->with('mensagem.sucesso', 'Anime Atualizado com sucesso!');
    }

    public function destroy(Series $serie)
    {

        $serie->delete();

        return to_route('series.index')->with('mensagem.sucesso', "Série '{$serie->name_serie}' removida com sucesso!");
    }

}

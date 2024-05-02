<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
//        $series = [
//            'One Piece',
//            'Supernatural',
//            'The Witcher',
//            'Silicon Valley',
//        ];

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('name-serie');
        $totalEpisode = $request->input('total-episode');
        $serie = new Serie();
        $serie->name_serie = $nomeSerie;
        $serie->total_episode = $totalEpisode;

        $serie->save();

        return redirect('/series');

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}

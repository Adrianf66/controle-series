<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function index(Series $serie)
    {
        $seasons = $serie->seasons;
//

        return view ('seasons.index', ['seasons'=> $seasons, 'serie' => $serie]);
    }
}

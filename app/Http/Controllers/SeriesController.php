<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'One Piece',
            'Supernatural',
            'The Witcher',
            'Silicon Valley',
        ];

        return view('lista-series', compact('series'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}

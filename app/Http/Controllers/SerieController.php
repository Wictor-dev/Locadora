<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SerieController extends Controller
{
    public function series() {
        $series = Serie::all();
        return view('series',['series' => $series]);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $serie = new Serie;

        $serie->name_serie = $request->name_serie;
        $serie->category = $request->category;
        $serie->sinopse = $request->sinopse;
        $serie->date_launch = $request->date_launch;

        $serie->save();

        return redirect('/');
    }
}

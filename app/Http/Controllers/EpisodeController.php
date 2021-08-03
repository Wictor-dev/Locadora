<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;
use App\Serie;
class EpisodeController extends Controller
{
    public function create(){
        $episodes = Episode::all();
        $series = Serie::all();
        return view('episodes.create',['episodes'=>$episodes], ['series'=>$series]);
    }

    public function store(Request $request){
        $episode = new Episode;

        $episode->name_episode = $request->name_episode;
        $episode->description_episode = $request->description_episode;
        $episode->number_of_episode = $request->number_of_episode;
        $episode->season = $request->season;

        $episode->save();
        $episode->series()->attach($request->serie);
        return redirect('/series')->with('msg','Episódio criado com sucesso!');
    }
}

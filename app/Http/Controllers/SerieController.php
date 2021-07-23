<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Category;
class SerieController extends Controller
{
    public function series() {
        $series = Serie::all();
        return view('series',['series' => $series]);
    }

    public function create(){
        $categories = Category::all();

        return view('series.create',['categories'=>$categories]);
    }

    public function store(Request $request){
        $serie = new Serie;

        $serie->name_serie = $request->name_serie;
        $serie->sinopse = $request->sinopse;
        $serie->date_launch = $request->date_launch;
        
        // Upload de imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image; //Pega a imagem
            $extension = $requestImage->extension(); //Pega a extensão da imagem
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //Pega o nome da imagem
            $request->image->move(public_path('img/series'), $imageName); // Salva a imagem no diretorio img/series
            
            $serie->image = $imageName; 
        }
        $serie->save();
        $serie->categories()->attach($request->category);
        return redirect('/series');
    }

    public function show($id){
        $serie = Serie::findOrFail($id);

        return view('series.show', ['serie'=>$serie]);
    }

    public function edit($id){
        $serie = Serie::findOrFail($id);
        $categories = Category::all();
        return view('series.edit', ['serie'=>$serie], ['categories'=>$categories]);
    }

    public function update(Request $request){
        Serie::findOrFail($request->id)->update($request->all());

        return redirect('/series')->with('msg', 'Serie editada com sucesso!');
    }
}

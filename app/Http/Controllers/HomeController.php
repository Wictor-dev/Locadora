<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class HomeController extends Controller
{
    public function index(){
        $series = Serie::all();
        return view('home',['series' => $series]);
    }
}

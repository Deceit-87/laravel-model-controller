<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
            $movies = Movie::all();
        return view('home', compact('movies'));
        // $movies = Movie::where('vote','> o < o >= o !=',1)->get();

    }
}

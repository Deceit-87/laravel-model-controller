<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
            $movies = Movie::all();
        return view('pages.home', compact('movies'));

    }
    public function show($indice){
       $movies = Movie::all();
       $movie = $movies[$indice];
        
       
    return view('pages.show', compact('movie')); 
    
}
}

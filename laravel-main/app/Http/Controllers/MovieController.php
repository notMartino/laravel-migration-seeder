<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function indexView(){

        $movies = Movie::all();
        return view('pages.index', compact('movies'));
    }
}

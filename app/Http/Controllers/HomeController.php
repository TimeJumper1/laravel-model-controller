<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
class HomeController extends Controller
{
    //
    public function movies() {
        
        // $movies = Movie::all();
        
        // $data = [
        //     'movies' => $movies
        // ];
        dd('oa');
        return view('welcome', );
    }
}

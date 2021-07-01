<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    //
    public function index(){

        $movies = Movie::all();
        //dump($movies);


        /* prove varie */
        
        /* $movies1 = Movie::where('title','Gravity')->get();
        //dump($movies1);
        $movies2 = Movie::where('title','like','Pulp%')->get();
        //dump($movies2[0]['title']);
        $movies3 = Movie::where('title','like','Pulp%')->first();
        //dump($movies3['title']);
        $movies4 = Movie::find(2);
        dump($movies4['title']); */

        $data = [
            'movies' => $movies
        ];

        return view('home',$data);
    }

}

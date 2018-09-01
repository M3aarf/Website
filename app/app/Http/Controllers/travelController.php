<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use inoledge\article;

class travelController extends Controller
{
    public function index()
    {
        return view('travel.index');
    }
    public function showTools()
    {
        $articles = article::where('catID',36)->paginate(12);
        return view('travel.tools')->with('articles',$articles);
    }
    public function showdest()
    {
        $articles = article::where('catID',37)->paginate(12);
        return view('travel.dest')->with('articles',$articles);
    }  
    public function showtips()
    {
        $articles = article::where('catID',38)->paginate(12);
        return view('travel.tips')->with('articles',$articles);
    }
}

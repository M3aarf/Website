<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use inoledge\article;

class careerController extends Controller
{
    public function index()
    {
        return view('career.index');
    }
    public function showinterviewCat()
    {
        $articles = article::where('catID', 34)->paginate(33);
        return view('career.interview')->with('articles',$articles);
    }
    public function showCvCat()
    {
        $articles = article::where('catID', 35)->paginate(33);
        return view('career.cv')->with('articles',$articles); 
    }
}

<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use  inoledge\course;
use Illuminate\Support\Facades\Storage;
use Auth;

class pages extends Controller
{
    public function index()
    {
        $articles = article::latest('created_at')->get()->take(10);
        $cats_article = array();
        $i=0;
        foreach($articles as $article)
        {
            $cats_article[$i] = articlesCat::find($article->catID);
            $i+=1;
            
        }
        $data = array
            (
            
                'articles' => $articles,
                'cat_articles' =>  $cats_article,
                'courses' => course::latest('created_at')->get()->take(10)
                
            
            );
        return view("pages.index")->with($data);
    }
}

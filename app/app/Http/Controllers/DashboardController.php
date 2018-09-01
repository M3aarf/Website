<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\course;
use  inoledge\articlesCat;
use  inoledge\tracks;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $count_posts = article::count();
        $count_courses = course::count();
		
        $lesson_down = course::sum('lesson_downloads');
        $down_page = course::sum('down_page');
        $real_downloads = course::sum('real_downloads');
		
		$count_tracks = tracks::count();
		$articles_cat_count = articlesCat::count();
		$views = article::sum('views')+course::sum('views')+tracks::sum('views');
		
        $data = array(
        'post_count' => $count_posts,
        'courses_count' => $count_courses,
        'tracks_count' =>  $count_tracks,
		
        'lesson_down' =>  $lesson_down,
        'down_page' =>  $down_page,
        'real_downloads' =>  $real_downloads,
		
        'articles_cat_count' =>  $articles_cat_count,
		'views' =>$views
        );
        return view('admin.pages.index')->with($data);
        
    }
}

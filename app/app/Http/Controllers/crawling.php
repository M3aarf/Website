<?php

namespace inoledge\Http\Controllers;

use  Illuminate\Http\Request;
use  inoledge\course;
use  inoledge\lessons;
use  inoledge\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Storage;
use  DataTables;
use  DB;
class crawling extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
 
    public function course(Request $request)
    {
        $user = auth()->user();
        $course_id = $request->input('id');
        $course_link = $request->input('link');
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $course_link);
        libxml_use_internal_errors(true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($c);
        $doc =  new \DOMDocument();
        $doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        //get titles for each lesson
        $finder = new \DomXPath($doc);
        $node = $finder->query("//*[contains(@class, 'yt-ui-ellipsis yt-ui-ellipsis-2')]");
        $count =  count($node);
        
        $titles = array();
        for($i=0 ; $i<$count ;$i++)
        {
            $titles[$i] = $node->item($i)->textContent;
            
        }
       
        //get links for each lesson
        $nodeList = $finder->query('//a[@class=" spf-link  playlist-video clearfix  yt-uix-sessionlink      spf-link "]');
        
        $links = array();
        foreach ($nodeList as $node)
        {
            $href = $node->getAttribute('href');
            $lesson_link = "https://www.youtube.com".$href;
            array_push($links,$lesson_link);
            
        }
    
       
        //add Lessons
        for($i=0 ; $i<$count ;$i++)
        {
            $lesson = new lessons;
            $lesson->title = $titles[$i];
            $lesson->main_link = $links[$i];
            $link = $links[$i];
            $arr =   explode('v=',$link);
            $lesson->link = substr($arr[1], 0, 11);
            $lesson->author = $user->id;  
            $lesson->course_id = $course_id;  
            $lesson->save();
        }
        return redirect('/admin/courses')->with('success','Course Created');
            
    }
}

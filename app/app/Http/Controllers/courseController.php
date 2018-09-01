<?php

namespace inoledge\Http\Controllers;

use  Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\lessons;
use  inoledge\course;
use  Illuminate\Support\Facades\Storage;
use  DataTables;
use  DB;

class courseController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth',['except'=>['index','showCat','showcourse','showAllCourses','showAllLanding']]);
        }
        public function showAllCourses()
		{
			 $data = array  
			 (
			 'courses' => course::latest('created_at')->paginate(16)
			 
			 );
			 return view('courses.all-courses')->with($data);
		}
		
		public function showAllLanding()
		{
		  $courses_titles = course::select('slug','title')->latest('created_at')->paginate(30);
		  return view('courses.landing_links')->with('courses',$courses_titles);
		}
        public function showcourse($id)
        {
                $course = course::find($id);
               if(!$course    )
                 {

                       return redirect('/كورسات-مجانا');

                 }
             $lessons = lessons::where('course_id',$course->id)->get();
              
                $courses = courses::find($course->cat_id);
            
               $cat     = courses::find($course->cat_id);
               
               $coursess = course::where('cat_id',$course->cat_id)->get();
              $data = array(
              
                  'status'  =>'1',
                  'course'  => $course,
                  'courses' => $coursess,
                  'cat'     => $cat,
                  'lessons' => $lessons
              
              
              );
            
          $views = $course->views;$views=$views+1;$course->views = $views;$course->save();
          $views = $courses->views;$views=$views+1;$courses->views = $views;$courses->save();
                return view('courses.course_playlist')->with ($data);
        }
}

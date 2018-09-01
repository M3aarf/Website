<?php


namespace inoledge\Http\Controllers;


use  Illuminate\Http\Request;
use  DataTables;
use  DB;
use  inoledge\course;
use  inoledge\lessons;


class youtube extends Controller
{
	public function show($id)
	{  
	    
		$course = course::find($id);
		$down = ($course->down_page)+1; 
		$course->down_page = $down;
		$course->save();
		$lessons = lessons::where('course_id',$id)->get();
		$data = array
		(
		 'course'=> $course,
		 'lessons'=>$lessons
		);
		return view('youtube.course')->with($data);
	}
	public function download($course_id,$id)
	{
		$course = course::find($course_id);
		$down = ($course->lesson_downloads)+1; 
		$course->lesson_downloads = $down;
		$course->save();
		$data = array
		(
		 'id'=> $id,
		 'course_id'=>$course_id,
		 'course' => $course
		);
		return view('youtube.index')->with($data);
	}
	public function update_downloads(Request $request)
	{
		$id = $request->id;
		$course = course::find($id);
		$down = ($course->real_downloads)+1; 
		$course->real_downloads = $down;
		$course->save();
		
	}
}
?>
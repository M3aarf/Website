<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\course;
class coursesController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth',['except'=>['index','showCat','category_videos']]);
        }
    
    public function index()
    {
		
        $cat = courses::select('id','title','slug','image')->get();
		$courses_titles = course::select('slug')->get();
		$data = array
		(
		  'cats' => $cat,
		  'courses_titles'=>$courses_titles
		);
        return view('courses.index')->with($data);
    }
    public static function showCat($id)
    {
         
         $cat = courses::find($id);
        if(!$cat)
         {
            
              return view('courses.course-cat')->with('status','0');
             
         }
        
        $data = array
           (
           
            'cat'=> $cat,
            'status' =>'1',
			'courses' => course::where('cat_id',$id)->paginate(12)
            
           ); 
        
        return view('courses.course-cat')->with($data);
    }
    public function category_videos()
    {
     
         $data = array(
        
            'cats' => courses::all()
        
        );
        return view("courses.videos_cat")->with($data);
    }

    public function create_cat()
    {
          $user = auth()->user();
          $this->validate($request,[
            
            'title' => 'required',
            'body'  => 'required',
            'image'  => 'required'
            
        ]);

        $cat = new courses;
        $cat->title = $request->input('title');
        $cat->desc = $request->input('body');
        $slug = str_replace(' ','_',$request->input('title'));
        $cat->slug =$slug; 
        $cat->date = date("Y-m-d H:i:s");
        $cat->author = $user->id;  
        $cat->image = $request->input('image');
        $cat->save();
        
        return redirect('/admin/courses')->with('success','Category Created');
    }
    
}

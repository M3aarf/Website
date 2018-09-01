<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\course;
use  inoledge\lessons;
use inoledge\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

use Intervention\Image\ImageManagerStatic as Image;

class adminCourse extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
 
    public function add(Request $request)
    {
          $user = auth()->user();
          $this->validate($request,[
            
            'title' => 'required',
            'body'  => 'required',
            'cat_id'  => 'required',
            'image'  => 'image|nullable|max:1999|dimensions:min-width=700,min-height=500'
            
        ]);
        if($request->hasfile('image'))
        {
           $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $fileNameToStore    =$filename."_".time().'.'.$extension;
           //$path =      $request->file('image')->storeAs('public/images',$fileNameToStore );
            
            $fileNameToStore    =$filename."_".microtime().'.'.$extension;  
			$fileNameToStore = str_replace(' ','',$fileNameToStore); 
            //Image::make($request->file('image')->getRealPath())->resize(400, 400)->crop(200,200)->save(public_path('/storage/images/'.$fileNameToStore)); 
            $img = Image::make($request->file('image')->getRealPath());
            $img->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('storage/images/').$fileNameToStore);
            
             $fileNameToStore1    =$filename."_".microtime().'.'.$extension;
			 $fileNameToStore1 = str_replace(' ','',$fileNameToStore1);   
               $img = Image::make($request->file('image')->getRealPath());
            $img->resize(null,400, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(600,400)->save(public_path('storage/images/').$fileNameToStore1);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        $course = new course;
        $course->title = $request->input('title');
        $course->desc = $request->input('body');
        $slug = str_replace(' ','-',$request->input('title'));
        $course->slug =$slug; 
        $course->author = $user->id;  
        $course->cat_id = $request->input('cat_id');  
        $course->image = $fileNameToStore;
        $course->image1 = $fileNameToStore1;
        $course->save();
        
        return redirect('/admin/courses')->with('success','Course Created');
    }
        public function addlesson(Request $request)
    {
          $user = auth()->user();
          $this->validate($request,[
            
            'title' => 'required',
            'link'  => 'required',
            'course_id'  => 'required'
            
        ]);
   
        $lesson = new lessons;
        $lesson->title = $request->input('title');
        $lesson->main_link = $request->input('link');
        $link = $request->input('link');
        $arr =   explode('v=',$link);
        $lesson->link = substr($arr[1], 0, 11);
        $lesson->author = $user->id;  
        $lesson->course_id = $request->input('course_id');  
        $lesson->save();
        
        return redirect('/admin/courses')->with('success','Course Created');
    }
    public function getCourses()
    {
         $course = course::all();
    
         
         return DataTables::of($course)
             
             ->addColumn('action',function($course)
                                                 {
                                                    
                                                   return '<a  target="_blank" href="'. url('admin/course/').'/'.$course->id.'/lessons" class="btn btn-success"><i class="fa fa-plus"></i></a>'.'<a  target="_blank" href="  '. url('course/').'/'.$course->id.'/'.$course->slug.'" class="btn btn-primary"><i class="fa fa-eye"></i></a>'.'<a target="_blank" href="'. url('admin/courses/edit_course/').'/'.$course->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick=" delete_course('.$course->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
             ->addColumn('category',function($course)
                                                 {
                                                   return courses::find($course->cat_id)->title; ;
                                                 })
             ->make(true);
    }
    public function edit_course($id)
     {
           
         $course = course::find($id);
         $cat_id = $course->cat_id;
         $pluc = courses::where('id','!=',$cat_id)->get();
         $course_cat = courses::find($cat_id);
         $data = array
            (
            'course'=>$course,
            'cats_select'=>$pluc,
            'course_cat'=>$course_cat
             );
         
        return view('admin.courses.edit_course')->with($data);
     }
    public function edit_lesson($id)
    {
         
         $lesson = lessons::find($id);
         $data = array
             (
             'lesson' =>  $lesson
             );
         
        
        return view('admin.courses.editLesson')->with($data);
    }
       public function lessons($id)
     {
           
         $course  = course::find($id); 
         $lessons = lessons::where('course_id',$id)->get();
         $data = array
              (
             'lessons' => $lessons,
             'course'  => $course
             );
         
        return view('admin.courses.lessons')->with($data);
     }
    public function getLessons($id)
    {
        
        $lessons = lessons::where('course_id',$id);
    
         
         return DataTables::of($lessons)
             
             ->addColumn('action',function($lessons)
                                                 {
                                                    
                                                   return '<a target="_blank" href=" '. url('admin/courses/lesson/').'/'.$lessons->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick=" delete_lesson('.$lessons->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
             ->editColumn('main_link',function($lessons){ return '<a target="_blank" href="'.$lessons->main_link.'">لينك</a>';} )
             ->rawColumns(['main_link', 'action'])
             ->make(true);
    }
        public function update_course(Request $request)
    {
                    $id   = $request->input('id');
       $this->validate($request,[
            
            'title' => 'required',
            'desc'  => 'required',
            'cat_id' => 'required'
            
        ]);
         
          if($request->hasFile('image'))
        {
          $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $fileNameToStore    =$filename."_".time().'.'.$extension;
           //$path =      $request->file('image')->storeAs('public/images',$fileNameToStore );
            
            $fileNameToStore    =$filename."_".microtime().'.'.$extension;  
			$fileNameToStore = str_replace(' ','',$fileNameToStore); 
            //Image::make($request->file('image')->getRealPath())->resize(400, 400)->crop(200,200)->save(public_path('/storage/images/'.$fileNameToStore)); 
            $img = Image::make($request->file('image')->getRealPath());
            $img->resize(null, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('storage/images/').$fileNameToStore);
            
             $fileNameToStore1    =$filename."_".microtime().'.'.$extension;
			 $fileNameToStore1 = str_replace(' ','',$fileNameToStore1);   
               $img = Image::make($request->file('image')->getRealPath());
            $img->resize(null,400, function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(600,400)->save(public_path('storage/images/').$fileNameToStore1);
        }
        
        $post = course::find($id);
        $post->title = $request->input('title');
        $slug = str_replace(' ','-',$request->input('title'));
        $post->slug =$slug;
        $post->cat_id =$request->input('cat_id');
        $post->desc = $request->input('desc');
        if($request->hasFile('image'))
        {
        	  if($post->image != 'noimage.jpg' && $post->image1 != 'noimage.jpg' )
             {
                 Storage::delete('public/images/'.$post->image);
                 Storage::delete('public/images/'.$post->image1);
             } 
            
             $post->image = $fileNameToStore;
			 $post->image1 = $fileNameToStore1;
        }
        $post->save();
        
        return redirect('/admin/courses/')->with('success','Course Updated');
    }

      public function destroyCourse($id)
    {
         $post = course::find($id);
         
        
         if($post->image != 'noimage.jpg')
         {
             Storage::delete('public/images/'.$post->image);
             Storage::delete('public/images/'.$post->image1);
         }
         $lesson = lessons::where('course_id',$id);
         $lesson->delete();
         $post->delete();
          
    }
    public function destroyLesson($id)
    {
         $post = lessons::find($id);
         $post->delete();
    }
    
}

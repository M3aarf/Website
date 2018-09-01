<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use  inoledge\courses;
use  inoledge\course;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use inoledge\Http\Controllers\Controller;
use DB;

class adminCourses extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $pluc = courses::pluck('title', 'id');
          
          $data = array(
              'course_select'      => $pluc,
          );
         
        
        
        return view('admin.pages.courses')->with($data);
    }
    public function icons()
    {
        return view('admin.pages.icon');
    }
      public function createcat(Request $request)
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
        $slug = str_replace(' ','-',$request->input('title'));
        $cat->slug =$slug; 
        $cat->date = date("Y-m-d H:i:s");
        $cat->author = $user->id;  
        $cat->image = $request->input('image');
        $cat->save();

        return redirect('/admin/courses')->with('success','Category Created');
      }
    public function getCatCourses()
    {
        	$cats = courses::all();
    
         
         return DataTables::of($cats)
             
             ->addColumn('action',function($cats)
                                                 {
                                                    
                                                   return '<a  target="_blank" href="'. url('courses/cat/').'/'.$cats->id.'/'.$cats->slug.'" class="btn btn-primary"><i class="fa fa-eye"></i></a>'.'<a target="_blank" href=" '. url('admin/courses/edit_cat/').'/'.$cats->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick="delete_cat_courses('.$cats->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
            ->addColumn('courses',function($cats)
                                                 {
                                                   return count(course::where('cat_id',$cats->id)->get());
                                                 })
             ->make(true);
    }
    
    
     public function edit_cat($id)
     {
           
        $cat = courses::find($id);
         
        return view('admin.courses.edit_cat')->with('cat',$cat);
     }
    public function updates_cat(Request $request)
    {
          $this->validate($request,[
            
            'title' => 'required'
            
        ]);
         
        $id   = $request->input('id');
        $post = courses::find($id);
        $post->title = $request->input('title');
        $slug = str_replace(' ','-',$request->input('title'));
        $post->slug =$slug;
        $post->image = $request->input('image');
        $post->desc = $request->input('desc');
        $post->save();
        
        return redirect('admin/courses/')->with('success','Category Updated');
    }
    
public function destroyCat($id)
    {
        
        $cat = courses::find($id);
        $count =  count(course::where('cat_id',$id)->get());
        if($count > 0)
        {
             return ' لا يمكن حذف هذا القسم  '. $cat->title.' لوجود مقالات مرتبطة به';
             
        }
      
        
         if($cat->image != 'noimage.jpg')
         {
             Storage::delete('public/images/'.$cat->image);
         }
        
         $cat->delete();
         return ' لقد تم الحذف  قسم  '. $cat->title.' بنجاح';
    }
    
}

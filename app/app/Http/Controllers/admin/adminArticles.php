<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use inoledge\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

class adminArticles extends Controller
{
      public function __construct()
        {
            $this->middleware('auth');
        }
      public function index()
      {
          $pluc = articlesCat::pluck('title', 'id');
          $users = article::all();
          $datatables = DataTables::of($users)->make(true);
          
          $data = array(
              'articles' =>article::all() ,
              'cats_select'      => $pluc,
              'cats'   =>articlesCat::all(),
              'tables' =>$datatables 
              
          
          );
         
          return view('admin.pages.articles')->with($data);
      }
      public function createcat(Request $request)
      {
           $user = auth()->user();
          $this->validate($request,[
            
            'title' => 'required',
            'body'  => 'required',
            'image'  => 'image|nullable|max:1999|dimensions:min-width=500,min-height=300'
            
        ]);
        if($request->hasfile('image'))
        {
           $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $fileNameToStore    =$filename."_".time().'.'.$extension;
           $path =      $request->file('image')->storeAs('public/images',$fileNameToStore );
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        $cat = new articlesCat;
        $cat->title = $request->input('title');
        $cat->desc = $request->input('body');
        $slug = str_replace(' ','-',$request->input('title'));
        $cat->slug =$slug; 
        $cat->date = date("Y-m-d H:i:s");
        $cat->author = $user->id;  
        $cat->image = $fileNameToStore;
        $cat->save();
        
        return redirect('/admin/articles')->with('success','Category Created');
      }
     public function edit($id)
     { 
         $article = article::find($id);
         $cat_id = $article->catID;
         $pluc = articlesCat::where('id','!=',$cat_id)->get();
         $article_cat = articlesCat::find($cat_id);
         $data = array
            (
            'post'=>$article,
            'cats_select'=>$pluc,
            'article_cat'=>$article_cat
             );
         
        return view('admin.articles.edit')->with($data);
         
     }
     public function edit_cat($id)
     {
           
        $cat = articlesCat::find($id);
         
        return view('admin.articles.edit_cat')->with('cat',$cat);
     }
    public function updates_cat(Request $request, $id)
    {
        
          $this->validate($request,[
            
            'title' => 'required'
            
        ]);
         
          if($request->hasFile('image'))
        {
           $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
          
           $fileNameToStore1    =$filename."_".microtime().'.'.$extension;   
           Image::make($request->file('image')->getRealPath())->crop(300, 300)->save(public_path('/storage/images/').$fileNameToStore1); 
        }
        
        $post = articlesCat::find($id);
        $post->title = $request->input('title');
		$post->desc = $request->input('desc');
        $slug = str_replace(' ','-',$request->input('title'));
        $post->slug =$slug;
        if($request->hasFile('image'))
        {
            if($post->image != 'noimage.jpg'  )
             {
                
                 Storage::delete('public/images/'.$post->image);
             } 
            
            $post->image = $fileNameToStore1;
        }
        $post->save();
        
        return redirect('/articles/cat/'.$id)->with('success','تم تعديل القسم');
    }
    public function getposts()
    {
        $users = article::all();
        return Datatables::of($users)
            ->make(true);
    }
    public function destroy($id)
    {
      
        $post = article::find($id);
         
        
         if($post->image != 'noimage.jpg' && $post->image1 != 'noimage.jpg')
         {
             Storage::delete('public/images/'.$post->image);
             Storage::delete('public/images/'.$post->image1);
             
         }
         
         $post->delete();
         //return redirect('/admin/articles')->with('success','Post Removed');
    }
public function destroyCat($id)
    {
        
        $cat = articlesCat::find($id);
        $count =  count(article::where('catID',$id)->get());
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

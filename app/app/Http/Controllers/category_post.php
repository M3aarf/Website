<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
class category_post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware('auth');
        }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
           Image::make($request->file('image')->getRealPath())->resize(null,350, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/images/').$fileNameToStore1); 
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;

use Intervention\Image\ImageManagerStatic as Image;
class articles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
        {
            $this->middleware('auth',['except'=>['index','show','showcat','allArticles','getPostsCat','allCat']]);
        }
    public function index()
    {
        $data = array
            (
            'cats' => articlesCat::latest('created_at')->paginate(4), 
            'articles' => article::all()
             );
        return view("articles.index")->with($data);
       
    }
	
    public function allCat()
	{
		$data = array(
		'cats' =>articlesCat::latest('created_at')->paginate(10)
		);
		return view("articles.allCat")->with($data);
	}
    public function allArticles()
	{
		$data = array(
		'articles' =>article::latest('created_at')->paginate(21)
		);
		return view("articles.all")->with($data);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            
            'title' => 'required',
            'body'  => 'required',
            'image'  => 'image|nullable|max:1999|dimensions:min-width=700,min-height=500'
            
        ]);
        if($request->hasfile('image'))
        {
           $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $fileNameToStore    =rand().microtime().'.'.$extension;
		   $fileNameToStore = str_replace(' ','',$fileNameToStore);
           //$path =      $request->file('image')->storeAs('public/images',$fileNameToStore );
            
             $img = Image::make($request->file('image')->getRealPath());
            $img->resize(800,null,function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(600,300)->save(public_path('/storage/images/').$fileNameToStore);;
           
             $fileNameToStore1    = rand()."_".microtime().'.'.$extension;
			 $fileNameToStore1    = str_replace(' ','',$fileNameToStore1);
              $img = Image::make($request->file('image')->getRealPath());
            $img->resize(null,250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/images/').$fileNameToStore1);
            
            
          // Image::make($request->file('image')->getRealPath())->crop(600, 600)->save(public_path('/storage/images/'.$fileNameToStore)); 
           //$fileNameToStore1    =$filename."_".microtime().'.'.$extension;   
           //Image::make($request->file('image')->getRealPath())->crop(300, 300)->save(public_path('/storage/images/'.$fileNameToStore1)); 
         
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }
        $post = new article;
        $post->title = $request->input('title');
		$post->keywords = $request->input('keywords');
        $post->body = $request->input('body');
        $slug = str_replace(' ','-',$request->input('title'));
        $post->slug =$slug;
        $post->catID =$request->input('cat_id');
        $post->image = $fileNameToStore;
        $post->image1 = $fileNameToStore1;
        $post->image2 = $fileNameToStore1;
        $user = auth()->user()->id;
        $post->author =  $user; 
        $post->save();
        $id = DB::getPdo()->lastInsertId();
     
       //  return redirect('/articles/'.$id)->with('success','Post Created');
         return redirect('/admin/articles/')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $article = article::find($id);
         if(!$article)
         {
              return abort(404);
              //return view('articles.article')->with('status','0');
             
         }
         
         $catid   = $article->catID;
         $cat = articlesCat::find($catid);
	
         $related =  article::where([
    ['catID', '=', $catid],
    ['id', '!=', $id],
])->get()->take(9);
         $data = array
             (
                'post' =>  $article ,
                'status' => '1',
                'cat'     => $cat,
                'related' => $related
             );
          $views = $cat->views;$views=$views+1;$cat->views = $views;$cat->save();
          $views = $article->views;$views=$views+1;$article->views = $views;$article->save();
         //$article = article::where('category',$cat_id)-get();
         
         return view('articles.article')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
         return view('articles.edit')->with($data);
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
            
            'title' => 'required',
            'body'  => 'required',
            'cat_id' => 'required'
            
        ]);
         
          if($request->hasFile('image'))
        {
              
              
              
           $filenameWithExt = $request->file('image')->getClientOriginalName(); 
           $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('image')->getClientOriginalExtension();
           $fileNameToStore    =$filename."_".microtime().'.'.$extension;
           //$path  =      $request->file('image')->storeAs('public/images',$fileNameToStore );
           Image::make($request->file('image')->getRealPath())->resize(800,null,function ($constraint) {
                    $constraint->aspectRatio();
                })->crop(600,300)->save(public_path('/storage/images/').$fileNameToStore); 
           $fileNameToStore1    =$filename."_".microtime().'.'.$extension;   
           Image::make($request->file('image')->getRealPath())->resize(null,250, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/storage/images/').$fileNameToStore1); 
         
        }
        
        $post = article::find($id);
        $post->title = $request->input('title');
        $slug = str_replace(' ','-',$request->input('title'));
        $post->slug =$slug;
        $post->catID =$request->input('cat_id');
        $post->body = $request->input('body');
        if($request->hasFile('image'))
        {
             if($post->image != 'noimage.jpg' && $post->image1 != 'noimage.jpg' )
             {
                 Storage::delete('public/images/'.$post->image);
                 Storage::delete('public/images/'.$post->image1);
             } 
            
            $post->image = $fileNameToStore ;
            $post->image1 = $fileNameToStore1;
            
           
        }
        $post->save();
        
        return redirect('/articles/'.$id)->with('success','Post Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = article::find($id);
         
        
         if($post->image != 'noimage.jpg')
         {
             Storage::delete('public/images/'.$post->image);
         }
        
         $post->delete();
         return redirect('/articles/')->with('success','Post Removed');
        
    }
    public function showcat($id)

    {
         $cat     = articlesCat::find($id);
         if(!$cat)
         {
               
                 return view('articles.cat')->with('status','0');    
            
         }
        else
        {
          
             $articles = article::where('catID', '=', $id)->orderBy('id', 'desc')->paginate(12); 
                     $data = array
                         (
                            'posts' =>$articles,
                            'status' =>'1',
                            'cat'     => $cat,
                         );
                    return view('articles.cat')->with($data);
            
        }
    
    }
    public static function getPostsCat($id)
    {
      
      
         $articles = article::where('catID', '=', $id)->orderBy('id', 'desc')->limit(4)->get(); 
         return $articles;
    }
    
}

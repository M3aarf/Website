<?php


namespace inoledge\Http\Controllers;


use  Illuminate\Http\Request;
use  DataTables;
use  DB;
use  inoledge\article;
use  inoledge\articlesCat;


class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     
     */
    public function __construct()
        {
            $this->middleware('auth');
        }
    public function datatable()
    {
        return view('admin.datatables');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {
    	$posts = article::all();
    
         
         return DataTables::of($posts)
             
             ->addColumn('action',function($posts)
                                                 {
                                                       
                                                   return '<a  target="_blank" href="'. url('articles/').'/'.$posts->id.'" class="btn btn-primary"><i class="fa fa-eye"></i></a>'.'<a target="_blank" href="'. url('admin/articles/edit/').'/'.$posts->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick="delete_post('.$posts->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
             ->addColumn('category',function($posts)
                                                 {
													  $id = $posts->catID;
													 return (articlesCat::find($id))->title;
                                                 
                                                 })
             ->make(true);
    
        
    }
       public function getCat()
    {
    	$cats = articlesCat::all();
    
         
         return DataTables::of($cats)
             
             ->addColumn('action',function($cats)
                                                 {
                                                     
                                                   return '<a  target="_blank" href="  '. url('articles/cat/').'/'.$cats->id.'" class="btn btn-primary"><i class="fa fa-eye"></i></a>'.'<a target="_blank" href="'. url('admin/articles/edit_cat/').'/'.$cats->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick="delete_cat('.$cats->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
             ->addColumn('posts',function($cats)
                                                 {
                                                   return count(article::where('catID',$cats->id)->get());
                                                 })
             ->make(true);
    
        
    }
}
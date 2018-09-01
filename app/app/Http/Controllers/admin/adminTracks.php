<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use  inoledge\tracks;
use  inoledge\tips;
use inoledge\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

use Intervention\Image\ImageManagerStatic as Image;

class adminTracks extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
    public function index()
    {
        return view('admin.pages.tracks');
    }
    public function add(Request $request)
    {
          $user = auth()->user();
          $this->validate($request,[
            
            'title' => 'required',
            'body'  => 'required',
            
        ]);
 
        $tracks = new tracks;
        $tracks->title = $request->input('title');
        $tracks->desc = $request->input('body');
        $slug = str_replace(' ','-',$request->input('title'));
        $tracks->slug =$slug; 
        $tracks->author = $user->id;  
        $tracks->save();
        
        return redirect('/admin/tracks')->with('success','Course Created');
    }
    public function addTips(Request $request)
    {
          $user = auth()->user();
          $this->validate($request,[
            
            'desc' => 'required',
            'track_id'  => 'required'
            
        ]);
        $tip = new tips;
        $tip->body = $request->input('desc');
        $tip->author = $user->id;  
        $tip->track_id = $request->input('track_id');  
		$track_id = $request->input('track_id');  
        $tip->save();
        return redirect('/admin/tracks/'.$track_id.'/tips')->with('success','Tip Created');
    }
   
    public function edit_tracks($id)
    {
           
         $tracks = tracks::find($id);
        return view('admin.tracks.edit')->with('tracks',$tracks);
     }
    public function editTips($id)
    {
        
         
        $tips = tips::find($id);
        return view('admin.tracks.tipEdit')->with('tips',$tips);
    }
    public function tips($id)
    {
           
         $track  = tracks::find($id); 
         $tips = tips::where('track_id',$id)->get();
         $data = array
              (
             'tips' => $tips,
             'track'  => $track
             );
         
        return view('admin.tracks.tips')->with($data);
     }
    public function getTracks()
    {
        
        	$tracks = tracks::all();
    
         
         return DataTables::of($tracks)
             
             ->addColumn('action',function($tracks)
                                                 {
                                                    
                                                   return '<a  target="_blank" href="'. url('admin/tracks/').'/'.$tracks->id.'/tips" class="btn btn-success"><i class="fa fa-plus"></i></a>'.'<a  target="_blank" href="'. url('tracks/').'/'.$tracks->id.'/'.$tracks->slug.'" class="btn btn-primary"><i class="fa fa-eye"></i></a>'.'<a target="_blank" href=" '. url('admin/tracks/edit/').'/'.$tracks->id.'" class="btn btn-warning"><i class="fa fa-pencil"></i></a>'.' <button onclick="delete_tracks('.$tracks->id.')" class="btn btn-danger"><i class="fa fa-trash"></i></button>';  
                                                 })
             
        
             ->make(true);
    }
    public function update_tracks(Request $request)
    {
                    $id   = $request->input('id');
       $this->validate($request,[
            
            'title' => 'required',
            'desc'  => 'required'
            
        ]);
         
   
        $tracks = tracks::find($id);
        $tracks->title = $request->input('title');
        $slug = str_replace(' ','-',$request->input('title'));
        $tracks->slug =$slug;
        $tracks->desc = $request->input('desc');
      
        $tracks->save();
        
        return redirect('/admin/tracks/')->with('success','تم تعديل المسار');
    }
    public function updateTips(Request $request)
    {
         $id   = $request->input('id');
        $this->validate($request,[
            
            'body' => 'required'
            
        ]);
        
        $tips = tips::find($id);
        $tips->body = $request->input('body');
      
        $tips->save();
        
        return redirect('/admin/tracks/')->with('success','تم التعديل ');
    }
    public function delete_tracks($id)
    {
         $tracks = tracks::find($id);
         $tracks->delete();
    }
    public function deleteTips($id)
    {
        $tips = tips::find($id);
        $tips->delete();
    }
    
}

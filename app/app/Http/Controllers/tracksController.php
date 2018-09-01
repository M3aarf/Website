<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use inoledge\tracks;
use inoledge\tips;

class tracksController extends Controller
{
    public function index()
    {
        $tracks = tracks::paginate(20);
        return view('tracks.index')->with('tracks',$tracks);
    }
    public function showTrack ($id)
    {
    	$tracks = tracks::find($id);
		if(!$tracks)
		{
			return redirect('/');
		}
        $tips = tips::where('track_id',$id)->get();
	    $track_name = tracks::find($id)->title;
		$track_desc = tracks::find($id)->desc;
        $data = array
            (
            'tips' => $tips,
            'track_name' => $track_name,
            'track_desc' => $track_desc
            );
        return view('tracks.track')->with($data);
    }
}

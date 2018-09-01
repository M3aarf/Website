<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;

use inoledge\course;
use inoledge\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

class downloads extends Controller
{
  	   
   public function getDownloads()
    {
         $down = course::all();
         return DataTables::of($down)->make(true);
    }
  
}

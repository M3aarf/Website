<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use inoledge\Http\Controllers\Controller;
class admin extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
     public function index()
    {
        $data = array(
         
            "title" => "Admin"
            
        );
        return view("admin.index")->with($data);
    }
}


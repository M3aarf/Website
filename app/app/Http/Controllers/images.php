<?php

namespace inoledge\Http\Controllers;

use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use Illuminate\Support\Facades\Storage;
use Auth;


use Intervention\Image\ImageManagerStatic as Image;


class images extends Controller
{
    public function index()
    {
        
        $img = Image::make('storage/images/post1_1525351324.jpg');
        $img->crop(200,200);
        $img->save('storage/images/b.jpg');
    }
}

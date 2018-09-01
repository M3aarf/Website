<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $table = 'courses';
    //protected $table = 'post_cat';
    public $primaryKey ='id';
    public $timestamps = true; 
}

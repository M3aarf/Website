<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    //protected $table = 'post_cat';
    public $primaryKey ='id';
    public $timestamps = true; 
}

<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class articlesCat extends Model
{
    protected $table = 'categories';
    //protected $table = 'post_cat';
    public $primaryKey ='id';
    public $timestamps = true; 
    public function posts()
    {
        return  $this->hasMany('inoledge\article');
    }
}

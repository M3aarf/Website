<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    protected $table = 'lessons';
    public $primaryKey ='id';
    public $timestamps = true; 
}

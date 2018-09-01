<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class tracks extends Model
{
    protected $table = 'tracks';
    public $primaryKey ='id';
    public $timestamps = true; 
}

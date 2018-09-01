<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = 'articles';
    //protected $table = 'post';
    public $primaryKey ='id'; 
    public function category()
    {
        return $this->belongsTo('inoledge\articlesCat');
    }
    public function getFromDateAttribute($value) {
    return \Carbon\Carbon::parse($value)->format('d-m-Y');
}
}

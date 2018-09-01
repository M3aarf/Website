<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class crawling extends Model
{
    protected $table = 'crawling';
    public $primaryKey ='id';
    public function getFromDateAttribute($value) {
    return \Carbon\Carbon::parse($value)->format('d-m-Y');
}
}

<?php

namespace inoledge;

use Illuminate\Database\Eloquent\Model;

class noor extends Model
{
    protected $table = 'noor';
    public $primaryKey ='id';
    public function getFromDateAttribute($value) {
    return \Carbon\Carbon::parse($value)->format('d-m-Y');
}
}

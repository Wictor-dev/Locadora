<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $guarded = [];
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}

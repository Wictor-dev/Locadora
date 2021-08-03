<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function series(){
        return $this->hasOne('App\Serie');
    }
    public function episodes(){
        return $this->hasMany('App\Episode');
    }
}

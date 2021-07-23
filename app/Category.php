<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name_category'];
    public function series(){ 
        return $this->belongsToMany('App\Serie');
    }
}

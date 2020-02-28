<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    public $timestamps = false;


    public function products(){
        return $this->hasMany('App\Product');
    }

}

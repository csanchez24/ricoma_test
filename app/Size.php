<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';
    public $timestamps = false;

    public function products(){
        return $this->hasMany('App\Product');
    }

}

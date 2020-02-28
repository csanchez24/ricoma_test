<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    public $timestamps = false;

    public function products(){
        return $this->hasMany('App\Product');
    }

}

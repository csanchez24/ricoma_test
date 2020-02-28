<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    public $timestamps = false;


    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function color(){
        return $this->belongsTo('App\Color');
    }

    public function size(){
        return $this->belongsTo('App\Size');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}

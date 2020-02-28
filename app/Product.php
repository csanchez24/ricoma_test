<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','name','brand_id'];


    public function brand(){
        return $this->belongsTo('App\Brand');
    }
}

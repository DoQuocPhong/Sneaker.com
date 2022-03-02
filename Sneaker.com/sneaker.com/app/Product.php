<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table ="products";

    public function bill_detail(){
        return $this->hasMany('App\Billdetail','id_product','id');
    }

    public function image_product(){
        return $this->hasMany('App\Image','id_product','id');
    }

    public  function type_products(){
        return $this->belongsTo('App\Typeproduct','id_type_product','id');
    }
}

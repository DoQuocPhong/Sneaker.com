<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
    //
    protected $table ="type_products";

    public  function products(){
        return $this->hasMany('App\Product','id_type_products','id');
    }
}

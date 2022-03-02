<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenew extends Model
{
    //
    protected $table ="image_new";

    public  function news(){
        return $this->belongsTo('App\News','id_new','id');
    }
}

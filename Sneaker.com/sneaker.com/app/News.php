<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table ="news";

    public function image_new(){
        return $this->hasMany('App\Imagenew','id_new','id');
    }
}

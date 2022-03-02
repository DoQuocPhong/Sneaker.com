<?php

namespace App\Http\Controllers\client;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogdetailController extends Controller
{
    //
    public function index($id){
        $blogs=News::all();

        $blog1=News::find($id+1);
        $blog=News::find($id);
        $blog2=News::find($id-1);

        if($blog1==null){
            $blog1=$blog;
        }
        if($blog2==null){
            $blog2=$blog;
        }

        return view('client.blog.blog-details',['blog'=>$blog,'blogs'=>$blogs,'blog1'=>$blog1,'blog2'=>$blog2]);
    }
}

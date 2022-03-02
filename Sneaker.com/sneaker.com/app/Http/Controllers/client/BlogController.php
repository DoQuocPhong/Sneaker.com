<?php

namespace App\Http\Controllers\client;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function index(){
        $blog=DB::table('news')->paginate(6);
        $blogg=DB::table('news')->paginate(3);

        return view('client.blog.blog',['blog'=>$blog,'blogg'=>$blogg]);
    }
}

<?php

namespace App\Http\Controllers\client;

use App\Image;
use App\News;
use App\Product;
use App\Slide;
use App\Typeproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){

        $slide=Slide::all();

        $type_product=Typeproduct::all();

        $product=Product::all();

        $productvans = Product::where('id_type_product', 1)->paginate(5);
        $productconverse = Product::where('id_type_product', 2)->paginate(5);

        $blog=DB::table('news')->paginate(3);

        return view('client.HomeSneaker.index',['slide'=>$slide,'type_product'=>$type_product,'product'=>$product,'productvans'=>$productvans,
            'productconverse'=>$productconverse,'blog'=>$blog]);
    }

    public function getSearch(Request $request){
        $type_product=Typeproduct::all();

        $images=Image::all();

        $product=Product::where('name','like','%'.$request->key.'%')->paginate(15);

        return view('client.Search.search',['product'=>$product,'type_product'=>$type_product,'images'=>$images]);
    }
}

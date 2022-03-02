<?php

namespace App\Http\Controllers\client;

use App\Image;
use App\Typeproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        $type_product = Typeproduct::all();
        $product = Product::all();

        $productvans = Product::where('id_type_product', 1)->paginate(6);
        $productconverse = Product::where('id_type_product', 2)->paginate(6);
        $productadidas = Product::where('id_type_product', 3)->paginate(6);
        $productnike = Product::where('id_type_product', 4)->paginate(6);

        $images = Image::all();

        return view('client.home.index', ['type_product' => $type_product, 'product' => $product, 'productvans' => $productvans, 'productconverse' => $productconverse,
            'productadidas' => $productadidas, 'productnike' => $productnike, 'images'=>$images]);

    }
}

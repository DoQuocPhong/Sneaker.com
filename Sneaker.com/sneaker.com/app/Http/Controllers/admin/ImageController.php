<?php

namespace App\Http\Controllers\admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    function index()
    {
        $images = Image::all();
        return view('admin.image_product.index', ['images' => $images]);
    }

    function create(Request $request)
    {
        $products = Product::all();
        return view('admin.image_product.add', ['products' => $products]);
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'id_product' => 'required',
            'img' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập tên sản phẩm'
        ]);

        $files = $request->file('img');
        foreach ($files as $file) {
            $imagee = new Image;
            $imagee->name = $request->name;
            $imagee->id_product = $request->id_product;

            if ($request->hasFile('img')) {
                $extension = $file->getClientOriginalExtension();
                if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                    return redirect('admin/image_product/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
                }

                $name = $file->getClientOriginalName();
                $image = Str::random(4) . "_" . $name;
                while (file_exists(public_path('upload/image_product/') . $image)) {
                    $image = Str::random(4) . "_" . $name;
                }
                $file->move(public_path('upload/image_product'), $image);
                $imagee->image = $image;
            }else {
                $imagee->image = "";
            }
        $imagee->save();
        }

        return redirect('admin/image_product/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy($id){
        $images = Image::find($id);
        $images->delete();

        return redirect('admin/image_product/display')->with('thongbao', 'Xóa thành công');
    }
}

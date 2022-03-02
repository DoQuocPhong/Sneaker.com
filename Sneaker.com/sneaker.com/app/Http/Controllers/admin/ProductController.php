<?php

namespace App\Http\Controllers\admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Typeproduct;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('admin.products.display', ['products' => $products]);
    }

    public function create()
    {
        $type_product = Typeproduct::all();
        return view('admin.products.add',['type_products' => $type_product]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'id_type_product' => 'required',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'image' => 'required',
            'unit' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập tên sản phẩm',
            'description.required' => 'Bạn chưa nhập mô tả sản phẩm'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->id_type_product = $request->id_type_product;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/product/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/product/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/product'), $image);
            $product->image = $image;
        } else {
            $product->image = "";
        }
        $product->save();

        $files = $request->file('img');
        foreach ($files as $file) {
            $imagee = new Image();
            $imagee->name = $product->name;
            $imagee->id_product = $product->id;

            if ($request->hasFile('img')) {
                $extension = $file->getClientOriginalExtension();
                if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                    return redirect('admin/image_new/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
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

        return redirect('admin/product/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $type_product = Typeproduct::all();
        return view('admin.products.update', ['products' => $product, 'type_products' => $type_product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate($request,
            [

            ],[

            ]);

        $product->name = $request->name;
        $product->id_type_product = $request->id_type_product;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->unit = $request->unit;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/product/update')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/product/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/product'), $image);
            unlink(public_path('upload/product/') . $product->image);
            $product->image = $image;
        }
        $product->save();
        return redirect('admin/product/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/product/display')->with('thongbao', 'Xóa thành công');
    }

    public function search(Request $request){
        $products=Product::where('name','like','%'.$request->key.'%')->paginate(15);

        return view('admin.products.display',['products'=>$products]);
    }
}

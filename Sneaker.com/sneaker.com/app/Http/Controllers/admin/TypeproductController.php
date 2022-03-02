<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Typeproduct;
use Illuminate\Support\Str;

class TypeproductController extends Controller
{
    //
    public function index()
    {
        $type_product = Typeproduct::all();
        return view('admin.type_products.display', ['type_products' => $type_product]);
    }

    public function create()
    {
        return view('admin.type_products.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập tên loại sản phẩm',
            'description.required' => 'Bạn chưa nhập mô tả loại sản phẩm'
        ]);

        $type_product = new Typeproduct;
        $type_product->name = $request->name;
        $type_product->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/type_product/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/type_product/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/type_product'), $image);
            $type_product->image = $image;
        } else {
            $type_product->image = "";
        }
        $type_product->save();

        return redirect('admin/type_product/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit($id)
    {
        $type_product = Typeproduct::find($id);
        return view('admin.type_products.update', ['type_products' => $type_product]);
    }

    public function update(Request $request, $id)
    {
        $type_product = Typeproduct::find($id);
        $this->validate($request, [

        ], [

        ]);

        $type_product->name = $request->name;
        $type_product->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/type_product/update')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/type_product/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/type_product'), $image);
            unlink(public_path('upload/type_product/') . $type_product->image);
            $type_product->image = $image;
        }else{
            dd("a");
        }
        $type_product->save();

        return redirect('admin/type_product/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $type_product = Typeproduct::find($id);
        $type_product->delete();

        return redirect('admin/type_product/display')->with('thongbao', 'Xóa thành công');
    }

    public function search(Request $request){
        $type_product=Typeproduct::where('name','like','%'.$request->key.'%')->paginate(15);

        return view('admin.type_products.display',['type_products' => $type_product]);
    }
}

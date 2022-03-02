<?php

namespace App\Http\Controllers\admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Imagenew;
use App\News;
use Illuminate\Support\Str;

class ImagenewController extends Controller
{
    //
    function index()
    {
        $images = Imagenew::all();
        return view('admin.image_new.index', ['images' => $images]);
    }

    function create(Request $request)
    {
        $news = News::all();
        return view('admin.image_new.add', ['news' => $news]);
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'id_new' => 'required',
            'img' => 'required'
        ], [

        ]);

        $files = $request->file('img');
        foreach ($files as $file) {
            $imagee = new Imagenew;
            $imagee->id_new = $request->id_new;

            if ($request->hasFile('img')) {
                $extension = $file->getClientOriginalExtension();
                if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                    return redirect('admin/image_new/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
                }

                $name = $file->getClientOriginalName();
                $image = Str::random(4) . "_" . $name;
                while (file_exists(public_path('upload/image_new/') . $image)) {
                    $image = Str::random(4) . "_" . $name;
                }
                $file->move(public_path('upload/image_new'), $image);
                $imagee->image = $image;
            }else {
                $imagee->image = "";
            }
            $imagee->save();
        }

        return redirect('admin/image_new/add')->with('thongbao', 'Thêm thành công');
    }

    public function search(Request $request){
        $images=Imagenew::where('name','like','%'.$request->key.'%')->paginate(15);

        return view('admin.image_new.index',['images'=>$images]);
    }

    public function edit($id){
        $image=Imagenew::find($id);
        $news=News::all();
        return view('admin/image_new/update',['image'=>$image,'news'=>$news]);
    }

    public function update(Request $request,$id){
        $imagee = Imagenew::find($id);
        $this->validate($request,
            [

            ],[

            ]);

        $imagee->id_new = $request->id_new;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/product/update')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/image_new/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/image_new'), $image);
            unlink(public_path('upload/image_new/') . $imagee->image);
            $imagee->image = $image;
        }
        $imagee->save();
        return redirect('admin/image_new/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function destroy($id){
        $images = Imagenew::find($id);
        $images->delete();

        return redirect('admin/image_new/display')->with('thongbao', 'Xóa thành công');
    }
}

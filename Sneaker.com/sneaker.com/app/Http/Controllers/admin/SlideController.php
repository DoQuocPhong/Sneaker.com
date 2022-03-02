<?php

namespace App\Http\Controllers\admin;

use App\Slide;
use App\Typeproduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class SlideController extends Controller
{
    //
    public function index(){
        $slide=Slide::all();
        return view('admin/slide/index',['slide'=>$slide]);
    }

    public function create(){
        $type_product=Typeproduct::all();
        return view('admin/slide/add',['type_product'=>$type_product]);
    }

    public function store(Request $request){
        $this->validate($request, [

        ], [

        ]);

        $slide = new Slide;
        $slide->type_product = $request->type_product;
        $slide->title = $request->title;
        $slide->content=$request->contentt;
        $slide->action = $request->action;
        $slide->discount = $request->discount;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/product/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/slide/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/slide'), $image);
            $slide->image = $image;
        } else {
            $slide->image = "";
        }
        $slide->save();

        return redirect('admin/slide/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit($id){
        $slide = Slide::find($id);
        return view('admin.slide.update',['slide'=>$slide]);
    }

    public function update(Request $request, $id){
        $slide=Slide::find($id);
        $this->validate($request,[

        ],[

        ]);

        $slide->type_product=$request->type_product;
        $slide->title=$request->title;
        $slide->content=$request->contentt;
        $slide->action=$request->action;
        $slide->discount=$request->discount;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/slide/update')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/slide/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/slide'), $image);
            unlink(public_path('upload/slide/') . $slide->image);
            $slide->image = $image;
        }
        $slide->save();
        return redirect('admin/slide/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function destroy(){

    }

    public function search(Request $request){
        $slide=Slide::where('title','like','%'.$request->key.'%')->paginate(15);

        return view('admin/slide/index',['slide'=>$slide]);
    }
}

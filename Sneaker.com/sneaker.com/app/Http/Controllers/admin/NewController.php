<?php

namespace App\Http\Controllers\admin;

use App\Imagenew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Str;


class NewController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        return view('admin.news.display', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.news.add');
    }

    public function store(Request $request)
    {
//        $this->validate($request,
//            [
//
//            ],
//            [
//
//            ]);

        $new = new News;
        $new->title = $request->title;
        $new->contentt = $request->contentt;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/new/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/new/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/new'), $image);
            $new->image = $image;
        } else {
            $new->image = "";
        }

        $new->save();

        $files = $request->file('img');
        foreach ($files as $file) {
            $imagee = new Imagenew;
            $imagee->name = $request->title;
            $imagee->id_new = $new->id;

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

        return redirect('admin/new/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit($id)
    {
        $new = News::find($id);
//        $type_product = Typeproduct::all();
        return view('admin.news.update', ['new' => $new]);
    }

    public function update(Request $request, $id)
    {
        $new = News::find($id);
        $this->validate($request,
            [

            ],
            [

            ]);

        $new->title = $request->title;
        $new->contentt = $request->contentt;

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
                return redirect('admin/product/add')->with('thongbao', 'Phần mở rộng không hợp lệ (Đuôi chỉ có thể là png,jpg,jpeg)');
            }

            $name = $file->getClientOriginalName();
            $image = Str::random(4) . "_" . $name;
            while (file_exists(public_path('upload/new/') . $image)) {
                $image = Str::random(4) . "_" . $name;
            }
            $file->move(public_path('upload/new'), $image);
            unlink(public_path('upload/new/') . $new->image);
            $new->image = $image;
        }
        $new->save();
        return redirect('admin/new/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $new = News::find($id);
        $new->delete();

        return redirect('admin/new/display')->with('thongbao', 'Xóa thành công');
    }

    public function search(Request $request){
        $news=News::where('title','like','%'.$request->key.'%')->paginate(15);

        return view('admin.news.display', ['news' => $news]);
    }
}

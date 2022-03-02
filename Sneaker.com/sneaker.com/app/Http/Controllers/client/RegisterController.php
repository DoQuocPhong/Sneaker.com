<?php

namespace App\Http\Controllers\client;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function index(){

    }

    public function create(){
        return view('client.Register.index');
    }

    public function store(Request $request){
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
            'confirmpassword'=>'required|same:password'
        ],[
            'name.required'=>'Bạn chưa nhập tên',

            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email đã được đăng ký',

            'password.required'=>'Bạn chưa nhập password',

            'confirmpassword.required'=>"Bạn chưa xác nhận lại mật khẩu",
            'confirmpassword.same'=>"Mật khẩu không khớp"
        ]);

        $user=new User();
        $user->full_name=$request->fullname;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->role=0;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}

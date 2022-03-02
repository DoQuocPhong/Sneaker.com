<?php

namespace App\Http\Controllers\client;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLoginClient(){
        return view('client.login.modal');
    }

    public function postLoginClient(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => "Bạn chưa nhập email",
            'password.required' => "Bạn chưa nhập mật khẩu",
        ]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {
            return redirect('');
        } else {
            return redirect()->back()->with('thongbao', 'Dang nhap khong thanh cong');
        }
    }

    public function getLogoutClient()
    {
        Auth::logout();
        return redirect('');
    }
}

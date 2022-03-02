<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;


class userController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('admin.user.display', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|unique:users,email|min:13|max:100|email',
                'password' => 'required|min:8|max:16',
                'fullname' => 'required|min:5|max:50',
                'confirmpassword' => 'required|same:password'
            ],
            [
                'email.required' => "Bạn chưa nhập email",
                'email.unique' => 'Email đã tồn tại',
                'email.min' => 'email phải có độ dài từ 13 đến 100 ký tự',
                'email.max' => 'email phải có độ dài từ 13 đến 100 ký tự',
                'email.email' => 'Bạn chưa nhập đúng định dạng email',

                'password.required' => "Bạn chưa nhập mật khẩu",
                'password.min' => "Mật khẩu phải có độ dài từ 8 đến 16 ký tự",
                'passowrd.max' => "Mật khẩu phải có độ dài từ 8 đến 16 ký tự",

                'fullname.required' => 'Bạn chưa  nhập tên',
                'fullname.min' => "Tên phải có độ dài từ 5 đến 50 ký tự",
                'fullname.max' => "Tên phải có độ dài từ 5 đến 50 ký tự",

                'confirmpassword.same' => "Mật khẩu nhập lại không khớp"
            ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->full_name = $request->fullname;
        $user->role = $request->role;

        $user->save();

        return redirect('admin/user/add')->with('thongbao', 'Thêm thành công');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.update', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'fullname' => 'required|min:5|max:50',
            ],
            [
                'fullname.required' => 'Bạn chưa  nhập tên',
                'fullname.min' => "Tên phải có độ dài từ 5 đến 50 ký tự",
                'fullname.max' => "Tên phải có độ dài từ 5 đến 50 ký tự",
            ]);

        $user = User::find($id);
        $user->full_name = $request->fullname;
        $user->role = $request->role;

        if ($request->changepassword == "on") {
            $this->validate($request,
                [
                    'password' => 'required|min:8|max:16',
                    'confirmpassword' => 'required|same:password'
                ],
                [
                    'password.required' => "Bạn chưa nhập mật khẩu",
                    'password.min' => "Mật khẩu phải có độ dài từ 8 đến 16 ký tự",
                    'passowrd.max' => "Mật khẩu phải có độ dài từ 8 đến 16 ký tự",

                    'confirmpassword.same' => "Mật khẩu nhập lại không khớp"
                ]);
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect('admin/user/update/' . $id)->with('thongbao', 'Sửa thành công');
    }

    public function getLoginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => "Bạn chưa nhập email",
            'password.required' => "Bạn chưa nhập mật khẩu",
        ]);

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {
            return redirect('admin/dasboard');
        } else {
            return redirect('admin/login')->with('thongbao', 'Dang nhap khong thanh cong');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/display')->with('thongbao', 'Xóa thành công');
    }

    public function getLogoutAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function search(Request $request){
        $users=User::where('full_name','like','%'.$request->key.'%')->paginate(15);

        return view('admin.user.display', ['users' => $users]);
    }

}

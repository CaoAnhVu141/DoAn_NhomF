<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminLoginAndRegisterController extends Controller
{
    public function ShowLogin()
    {
        return view("login_register.login");
    }
    public function ShowRegister()
    {
        return view("login_register.register");
    }

    public function UserLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng tới trang chính
            return redirect('/');
        }

        // Đăng nhập thất bại, hiển thị form đăng nhập lại với thông báo lỗi
        return redirect()->back()->withInput()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác']);
    }
     //viết hàm logout
     public function logoutUser()
     {
         Auth::logout();
         return redirect('login')->with('message','Đăng Xuất Thành Công !');
     }
}

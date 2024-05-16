<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

     //Hàm Đăng Ký
  public function UserRegister(Request $request)
  {
      // Hàm kiểm tra dữ liệu nhập vào
      $validator = Validator::make($request->all(), [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
          'phone' => 'required|string|max:15',
          'avatar' => 'nullable|string|max:255',
          'address' => 'nullable|string|max:255',
      ]);

      // Kiểm tra nếu lỗi trả về lỗi 
      if ($validator->fails()) {
          return redirect('register')
                      ->withErrors($validator)
                      ->withInput();
      }

      // Create a new user
          User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
          'phone' => $request->phone,
          'avatar' => $request->avatar,
          'address' => $request->address,
      ]);

      // Redirect to the login 
      return redirect('login')->with('success', 'Registration successful. Please log in.');
  }
}

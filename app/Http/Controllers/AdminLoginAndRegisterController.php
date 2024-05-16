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

     // Hàm Đăng ký
     public function UserRegister(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Login the user immediately after registration
        Auth()->login($user);

        return redirect('login')->with('thongbao','khong dk đc');
    }

    // hàm xử lý điều kiện đăng ký
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:15'],
            'avatar' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'address' => ['required', 'string', 'max:255'],
        ]);
    }

    // hàm truyền dữ liệu vào db
    protected function create(array $data)
    {
        $avatarPath = $data['avatar']->store('avatars', 'public');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'avatar' => $avatarPath,
            'address' => $data['address'],
        ]);
    }
}

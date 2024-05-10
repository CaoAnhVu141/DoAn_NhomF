<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    //
    public function showAminLogin()
     {
         return view('admin-login.login');
     }

      ///thực thi phân quyền đăng nhập á nè
        public function UserLoginAdmin(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::guard('admin')->attempt($credentials)) {
                $user = Auth::guard('admin')->user();
                if ($user->id_role === 1) {
                    return redirect()->route('manageruser');
                } elseif ($user->id_role === 2) {
                    return redirect()->route('indexcategory');
                }
            }
            else{
                return redirect()->route('showadminlogin');
            }
        }

        //logout cho tài khoản bán hàng

        public function logoutUserSell(Request $request)
        {
            Auth::guard('web')->logout(); // Sử dụng guard 'web' cho người bán hàng
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            return redirect()->route('showadminlogin'); // Điều hướng sau khi logout
        }
}

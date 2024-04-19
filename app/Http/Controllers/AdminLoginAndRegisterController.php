<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginAndRegisterController extends Controller
{
    //From show admin
    public function ShowLogin()
    {
        return view('admin-login-register.login');
    }
    //Show SignUp
    public function ShowRegister()
    {
        return view('admin-login-register.register');
    }
    //Show HomePage
    public function ShowHomePage()
    {
        return view('LayOut.homepage');
    }
}

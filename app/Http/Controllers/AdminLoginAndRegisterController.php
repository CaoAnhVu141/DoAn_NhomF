<?php

namespace App\Http\Controllers;

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
}

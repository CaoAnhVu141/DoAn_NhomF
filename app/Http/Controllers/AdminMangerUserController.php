<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMangerUserController extends Controller
{
    //
    //show giao diện quản lý users

    public function showManagerUsers()
    {
        return view('admin.manageruser.index');
    }
}

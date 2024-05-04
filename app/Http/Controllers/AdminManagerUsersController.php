<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManagerUsersController extends Controller
{
    //

    public function showManagerUsers()
    {
        return view('admin.manageruser.index');
    }
}

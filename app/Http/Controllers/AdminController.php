<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('showadminlogin');
    }

    
}

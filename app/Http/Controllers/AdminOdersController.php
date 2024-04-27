<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOdersController extends Controller
{
    //

    //show giao diện

    public function showIndexOder()
    {
        return view('admin.oders.index');
    }

    //show giao diện chi tiết đơn hàng

    public function showDetailIndexOder()
    {
        return view('admin.oders.view');
    }
}

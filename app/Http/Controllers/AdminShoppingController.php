<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{
    //thực thi code cho mua hàng nha anh em
    ///

    public function showIndexShopping()
    {
        return view('shopping.index');
    }

    public function showDetailIndexShopping()
    {
        return view('shopping.detail');
    }
}

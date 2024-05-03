<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{
    //
    ///
    //hiện thị trang chủ index shopping

    public function showIndexShopping()
    {
        return view('shopping.dashboard');
    }

    //hiển thị chi tiết sản phẩm

    public function showDetailShopping()
    {
        return view('shopping.detail');
    }
}

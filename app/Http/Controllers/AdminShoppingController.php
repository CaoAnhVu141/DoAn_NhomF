<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{

    //thực thi code cho mua hàng nha anh em
    ///

    // public function showIndexShopping()
    // {
    //     return view('shopping.index');
    // }

    // public function showDetailIndexShopping()
    // {

    // }

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

    //hiển thị giỏ hàng

    public function showCart()
    {
        return view('shopping.checkout');
    }
}

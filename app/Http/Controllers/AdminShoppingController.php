<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{
<<<<<<< HEAD
    //thực thi code cho mua hàng nha anh em
    ///

    public function showIndexShopping()
    {
        return view('shopping.index');
    }

    public function showDetailIndexShopping()
=======
    //
    ///
    //hiện thị trang chủ index shopping

    public function showIndexShopping()
    {
        return view('shopping.dashboard');
    }

    //hiển thị chi tiết sản phẩm

    public function showDetailShopping()
>>>>>>> caoanhvu141
    {
        return view('shopping.detail');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{

    //hiện thị trang chủ index shopping

    public function showIndexShopping()
    {
        $products = Product::paginate(5);
        return view('shopping.dashboard',compact('products'));
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

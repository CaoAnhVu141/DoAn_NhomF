<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{

    //hiện thị trang chủ index shopping

    public function showIndexShopping()
    {
        $products = Product::paginate(16);
        return view('shopping.dashboard',compact('products'));
    }

    //hiển thị chi tiết sản phẩm

    public function showDetailShopping($id)
    {
        $productdetail = Product::find($id);
        $sizesArray = explode(',', $productdetail->sizes);
        $listImages = json_decode($productdetail->list_images, true);
        return view('shopping.detail',compact('productdetail','sizesArray','listImages'));
    }

    
}

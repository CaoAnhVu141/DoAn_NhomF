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
        $products = Product::paginate(5);
        return view('shopping.dashboard',compact('products'));
    }

    //hiển thị chi tiết sản phẩm

    public function showDetailShopping($id)
    {
        // lấy chi tiết từ id
        $productdetail = Product::find($id);
        // chia chuỗi đươc luu trong sizes , hàm explode chia chuỗi dựa trên dấu phẩy
        $sizesArray = explode(',', $productdetail->sizes);
        //tạo mảng lưu dưới dạng chuỗi
        $listImages = json_decode($productdetail->list_images, true);
        //trả về trang detail
        return view('shopping.detail',compact('productdetail','sizesArray','listImages'));
    }

    
}

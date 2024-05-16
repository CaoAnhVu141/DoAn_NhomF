<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Oder;
use Illuminate\Http\Request;

class CheckStatusOders extends Controller
{
    //
    public function showCheckOders()
    {
        $userId = Auth::id();

        // Lấy toàn bộ thông tin các đơn hàng của người dùng đó
        $orders = Oder::where('id_user', $userId)->orderBy('created_at', 'desc')->get();
        return view('shopping.odersstatus',compact('orders'));
    }


   
}

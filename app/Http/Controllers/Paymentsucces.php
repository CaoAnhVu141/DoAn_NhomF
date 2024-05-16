<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use Illuminate\Http\Request;

class Paymentsucces extends Controller
{
    //

    //hiện thị view thanh toán thành công

    public function showPayment($id_order)
    {
        $order = Oder::find($id_order);
        if (!$order) {
            // Xử lý trường hợp đơn hàng không tồn tại
            return redirect()->route('error')->with('error', 'Đơn hàng không tồn tại.');
        }
        return view('shopping.paymentsuccess', compact('order'));
    }
}

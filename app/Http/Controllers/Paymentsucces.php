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
        return view('shopping.paymentsuccess', compact('order'));
    }
}

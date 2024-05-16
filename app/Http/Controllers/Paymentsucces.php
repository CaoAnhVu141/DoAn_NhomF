<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paymentsucces extends Controller
{
    //

    //hiện thị view thanh toán thành công

    public function showPayment()
    {
        return view('shopping.paymentsuccess');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminShoppingController extends Controller
{
    //
    ///

    public function showIndexShopping()
    {
        return view('shopping.dashboard');
    }
}

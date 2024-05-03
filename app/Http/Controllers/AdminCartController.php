<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCartController extends Controller
{
    //
    public function showIndexCart()
    {
        return view('cart.index');
    }
}

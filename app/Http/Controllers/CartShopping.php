<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartShopping extends Controller
{
    //

    public function addCartShopping($id)
    {
        // Cart::destroy();
        $cartproduct  = Product::find($id);
        // return $cartproduct;

        $sizes = explode(',', $cartproduct->sizes);

        Cart::add([
            [
                'id' => $cartproduct->id_product,
                'name' => $cartproduct->name,
                'qty' => 1,
                'price' => $cartproduct->price,
                'total' => $cartproduct->price * 1,
                'options' => [
                    'sizes' => $sizes,
                    'image' => $cartproduct->image
                ]
            ]
        ]);
        

        return redirect()->route('indexcart');
    }

    //hàm xoá

    public function deleteCartShopping($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('indexcart');
    }

    //update

    public function updateCartShopping(Request $request)
    {
        // dd($request->all());
        $datacart = $request->get('amount');
        foreach($datacart as $key=> $value)
        {
            Cart::update($key,$value);
        }
        return redirect()->route('indexcart');
    }
}

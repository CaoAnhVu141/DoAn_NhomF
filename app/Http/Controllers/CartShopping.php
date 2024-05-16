<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartShopping extends Controller
{
    //

    public function addCartShopping(Request $request, $id)
    {
        
        // return redirect()->route('indexcart');
        $cartproduct = Product::find($id);
        $qty = $request->input('amount');


        //tìm kiếm sản phẩm
        $dataProduct = Cart::search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id_product == $id;
        });

        // Kiểm tra sản phẩm có tồn tại?
        if ($dataProduct->isNotEmpty()) {
            // Lấy rowId của sản phẩm
            $rowId = $dataProduct->first()->rowId;
            // Lấy số lượng hiện tại của sản phẩm trong giỏ hàng
            $currentQty = Cart::get($rowId)->qty;

            // Cập nhật số lượng của sản phẩm bằng tổng của số lượng hiện tại và số lượng mới
            Cart::update($rowId, $currentQty + $qty);
        } else {
            $sizes = $request->get('sizes'); // Lấy giá trị của size từ request

            // Tạo một mảng options với size và các thông tin khác
            $options = [
                'sizes' => $sizes,
                'image' => $cartproduct->image
            ];

            // dd($options);

            // Thêm sản phẩm vào giỏ hàng với mảng options
            Cart::add([
                [
                    'id' => $cartproduct->id_product,
                    'name' => $cartproduct->name,
                    'qty' => $qty,
                    'price' => $cartproduct->price,
                    'total' => $cartproduct->price,
                    'options' => $options
                ]
            ]);
        }
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

        $datacart = $request->get('amount');
        foreach ($datacart as $key => $value) {
            Cart::update($key, $value);
        }
        return redirect()->route('indexcart');
    }


    // public function updateDetailProduct(Request $request)
    // {

    //     $qty = $request->input('amount');
    //     $rowId = $request->input('rowId');
    //     // dd($qty);
    //     Cart::update($rowId, $qty);
    //     return redirect()->route('indexcart')->with('success', 'Cart updated successfully');
    // }
}

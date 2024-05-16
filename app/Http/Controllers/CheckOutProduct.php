<?php

namespace App\Http\Controllers;

use App\Mail\SendMaill;
use App\Models\Oder;
use App\Models\PayofType;
use App\Models\Transport;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class CheckOutProduct extends Controller
{
    //
    //hiển thị thanh toán
    public function showCheckOut()
    {
        $transprort = Transport::all();
        $payoftype = PayofType::all();
        return view('shopping.checkout', compact('transprort', 'payoftype'));
    }

    /// thực hiện thanh toán

    public function enforcementCart(Request $request)
    {
        $userId = Auth::guard('admin')->user()->id;

        // Lấy thông tin sản phẩm từ giỏ hàng
        $products = Cart::content();

        // Khởi tạo mảng để lưu id_product của các sản phẩm trong giỏ hàng
        $idProducts = [];

        // Lặp qua từng sản phẩm trong giỏ hàng và lấy id_product
        foreach ($products as $product) {
            // Lấy id_product từ thuộc tính id của mỗi mục trong giỏ hàng
            $idProduct = $product->id;
            // Kiểm tra nếu id_product tồn tại, thêm vào mảng $idProducts
            if ($idProduct) {
                $idProducts[] = $idProduct;
            }
        }

        // Chuyển mảng id_product thành chuỗi để lưu vào session
        $idProductsString = implode(',', $idProducts);

        // Lấy thông tin thanh toán từ request
        $billingInfo = $request->only(['id_transport', 'id_pay', 'name', 'phone', 'district']);

        // Lấy thông tin người mua hàng
        $id_user = Auth::id();

        // Tạo một mảng để lưu các giá trị mặc định
        $orderData = [
            'id' => $userId, // Cung cấp giá trị cho trường id
            'id_user' => $id_user,
            'email' => Auth::user()->email,
            'name' => $billingInfo['name'],
            'phone' => $billingInfo['phone'],
            'district' => $billingInfo['district'],
            'id_transport' => $billingInfo['id_transport'] ?? null,
            'id_pay' => $billingInfo['id_pay'] ?? null,
            'amount' => Cart::count(),
            'id_product' => $idProductsString,
            'intomoney' => floatval(str_replace(',', '', Cart::total())),
        ];

        // Tạo đơn hàng mới và gán thông tin thanh toán
        $order = Oder::create($orderData);

        // Xử lý khi tạo đơn hàng không thành công
        if (!$order) {
            return redirect()->back()->with('error', 'Failed to create order');
        }

        // Gửi email thông báo đơn hàng
        // Mail::to(Auth::user()->email)->send(new SendMaill($order));
        Mail::to(Auth::user()->email)->send(new SendMaill($order));

        // Xóa giỏ hàng sau khi đặt hàng thành công
        Cart::destroy();

        // Chuyển hướng người dùng đến trang cảm ơn hoặc trang xác nhận đơn hàng
        return redirect()->route('paymentnow', ['id_order' => $order->id_oder])->with('success', 'Order placed successfully');
    }

}

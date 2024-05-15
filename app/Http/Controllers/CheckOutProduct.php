<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\PayofType;
use App\Models\Transport;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return "Thanh toán nè";

        // if (Auth::guard('admin')->check()) {
        //     // Lấy ID của người dùng đang đăng nhập
        //     $userId = Auth::guard('admin')->user()->id;

        //     // Thêm thuộc tính vào bảng attributes và lưu trữ ID của người dùng
        //     Oder::create([
        //         'name' => $request->input('name'),
        //         'email'=> $request->input('email'),
        //         'phone'=> $request->input('phone'),
        //         'address'=> $request->input('address'),
        //         'id_transport' =>$request->input('transport'),
        //         'id_pay' => $request->input('pay'),

        //         'discription' => $request->input('descriptioncategory'),
        //         'id' => $userId,
        //         // Thêm các trường thông tin khác của thuộc tính nếu cần
        //     ]);

        //     return redirect()->route('indexcategorypost')->with('status','Thêm thành công rồi nè');
        // }


        // // Lấy ID của người bán hàng
        // $userId = Auth::guard('admin')->user()->id;
        // //lấy id tài khoản khách hàng đang đăng nhập
        // $id_user = Auth::id();
        // // dd($id_user);

        // // Lấy thông tin thanh toán từ request
        // $billingInfo = $request->only(['name', 'email', 'address','id_transport','id_pay']);

        // // Tạo đơn hàng mới và gán thông tin thanh toán
        // Oder::create([
        //     // 'name' => $billingInfo['name'],
        //     'email' => $billingInfo['email'],
        //     'address' => $billingInfo['address'],
        //     'id_transport' => $billingInfo['id_transport'] ?? null,
        //     'id_pay' => $billingInfo['id_pay'] ?? null,
        //     'id_user' => $id_user,
        //     'id' => $userId,
        //     'amount' => Cart::count(),
        //     'intomoney'=> Cart::total(),
        //     // Thêm các trường thông tin khác của đơn hàng nếu cần
        // ]);

        // Lấy thông tin người dùng đăng nhập
        $userId = Auth::guard('admin')->user()->id;
        //lấy id tài khoản khách hàng đang đăng nhập
        $id_user = Auth::id();

        // Lấy thông tin thanh toán từ request
        $billingInfo = $request->only(['name', 'address', 'id_transport', 'id_pay']);

        // $ccc = floatval(str_replace(',', '', Cart::total()));
        $email = Auth::user()->email;
        // Tạo một mảng để lưu các giá trị mặc định
        $orderData = [
            'id' => $userId,
            'id_user' => $id_user,
            'email' => $email,
            'address' => $billingInfo['address'] ?? null,
            'id_transport' => $billingInfo['id_transport'] ?? null,
            'id_pay' => $billingInfo['id_pay'] ?? null,
            'amount' => Cart::count(),
            'intomoney' => floatval(str_replace(',', '', Cart::total())),
        ];

        // Tạo đơn hàng mới và gán thông tin thanh toán
        $order = Oder::create($orderData);

        // Xử lý khi tạo đơn hàng không thành công
        if (!$order) {
            return redirect()->back()->with('error', 'Failed to create order');
        }

        // Xử lý khi tạo đơn hàng thành công
        // Xóa giỏ hàng sau khi đặt hàng thành công
        Cart::destroy();

        // Chuyển hướng người dùng đến trang cảm ơn hoặc trang xác nhận đơn hàng
        return redirect()->route('payment')->with('success', 'Order placed successfully');
    }
}

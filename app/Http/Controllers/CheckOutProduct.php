<?php

namespace App\Http\Controllers;

use App\Mail\SendMaill;
use App\Models\Oder;
use App\Models\PayofType;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Transport;
use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    // public function enforcementCart(Request $request)
    // {
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
    // public function enforcementCart(Request $request)
    // {

    // Lấy thông tin người dùng đăng nhập
    // $userId = Auth::guard('admin')->user()->id;
    // dd($userId); die();

    // day neay
    // $cartItems = Cart::content();

    // // Lưu danh sách sản phẩm vào session
    // session()->put('id_product', $cartItems);


    // //lấy id tài khoản khách hàng đang đăng nhập
    // $id_user = Auth::id();

    // // Lấy thông tin thanh toán từ request
    // $billingInfo = $request->only(['name', 'id_transport', 'id_pay', 'phone', 'district']);

    // // $ccc = floatval(str_replace(',', '', Cart::total()));
    // $email = Auth::user()->email;


    // // Tạo một mảng để lưu các giá trị mặc định
    // $orderData = [
    //     // 'id' => $userId,
    //     'id_user' => $id_user,
    //     'email' => $email,
    //     'name' => $billingInfo['name'],
    //     'phone' => $billingInfo['phone'],
    //     'district' => $billingInfo['district'],
    //     'id_transport' => $billingInfo['id_transport'] ?? null,
    //     'id_pay' => $billingInfo['id_pay'] ?? null,
    //     'amount' => Cart::count(),
    //     'intomoney' => floatval(str_replace(',', '', Cart::total())),

    // ];
    // // $idProducts = [];
    // // foreach ($cartItems as $item) {
    // //     $idProducts[] = $item->id; // Giả sử id của sản phẩm là id
    // // }
    // // $orderData['id_product'] = $idProducts;
    // // Lấy danh sách ID sản phẩm từ giỏ hàng
    // $productIds = $cartItems->pluck('id');
    // foreach ($productIds as $productId) {
    //     $product = Product::find($productId);
    //     if ($product) {
    //         // Lấy ID của người bán từ sản phẩm và gán vào đơn hàng
    //         $orderData['id_product'] = $product->id;
    //     }
    // }


    // // Tạo đơn hàng mới và gán thông tin thanh toán
    // $order = Oder::create($orderData);

    // // Xử lý khi tạo đơn hàng không thành công
    // if (!$order) {
    //     return redirect()->back()->with('error', 'Failed to create order');
    // }

    // // Xử lý khi tạo đơn hàng thành công
    // // Xóa giỏ hàng sau khi đặt hàng thành công
    // Cart::destroy();

    // // Chuyển hướng người dùng đến trang cảm ơn hoặc trang xác nhận đơn hàng
    // return redirect()->route('payment', ['id_oder' => $order->id_oder])->with('success', 'Order placed successfully');

    // Lấy thông tin người dùng đăng nhập
    // Lấy thông tin người dùng đăng nhập
    // 11111111111111
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


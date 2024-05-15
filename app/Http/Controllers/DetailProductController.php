<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailProductController extends Controller
{
    //

    public function updateDetailProduct(Request $request)
    {
        $rowId = $request->input('row_id'); // Lấy row_id của sản phẩm cần cập nhật
        $amount = $request->input('amount'); // Lấy số lượng mới từ form

        // Kiểm tra xem số lượng mới có hợp lệ không
        if ($amount <= 0) {
            // Nếu số lượng không hợp lệ, bạn có thể xử lý tùy ý ở đây
            // Ví dụ: hiển thị thông báo lỗi và chuyển hướng người dùng trở lại trang giỏ hàng
            return redirect()->back()->with('error', 'Số lượng không hợp lệ');
        }

        // Cập nhật số lượng sản phẩm trong giỏ hàng
        Cart::update($rowId, $amount);

        // Chuyển hướng người dùng đến trang giỏ hàng
        return redirect()->route('indexcart')->with('success', 'Cập nhật số lượng sản phẩm thành công');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Oder;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //show trang dashboad và data trong dashboard

    public function showDashBoard()
    {
        // Lấy ID người dùng hiện tại
        $userId = Auth::id();
        // Đếm số lượng đơn hàng của người dùng hiện tại
        $countOder = Oder::where('id_user', $userId)->count();
        $countProduct = Product::where('id_product', $userId)->count();
        $minutes = Carbon::now()->subMinutes(10);
        $dataDashboard = Oder::where('created_at', '>=', $minutes)->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.transaction.dashboard', compact('dataDashboard','countOder','countProduct'));
    }

    //show trang danh sách sản phẩm đã đặt và cập nhật hé
    public function showListOders()
    {
        $listOder = Oder::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.transaction.index', compact('listOder'));
    }

    //show thông tin khách hàng theo id_oders

    public function viewDetailOders($id_oder)
    {
        // $listOder = Oder::find($id);
        // return view('admin.transaction.view',compact('listOder'));
        $listOder = Oder::where('id_oder', $id_oder)->first();
        if (!$listOder) {
            // Xử lý trường hợp không tìm thấy đơn hàng
            return redirect()->route('indexdashboard')->with('status', 'Không tìm thấy đơn hàng.');
        }

        return view('admin.transaction.view', compact('listOder'));
    }


    //xử lý đơn hàng khi nhận được nè
    public function handleOdersProduct($id_oder, $status)
    {
        $oder = Oder::findOrFail($id_oder);

        //cập nhật lại trạng thái đơn hàng
        $oder->status = $status;
        $oder->save();
        return redirect()->route('indexlistoder')->with('status', "Bạn đã cập nhật thành công");
    }

    ///hàm xoá trạng thái đơn hàng
    public function deleteOdersProduct($id)
    {
        $oder = Oder::find($id);

        if ($oder) {
            $oder->delete();
        }
        return redirect()->route('indexlistoder')->with('status', "Bạn đã xoá thành công");
    }
}

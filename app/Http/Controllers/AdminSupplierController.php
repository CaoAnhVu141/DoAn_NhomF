<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSupplierController extends Controller
{
    //

    public function showIndexSupplier(Request $request)
    {
        $key = "";
        if($request->input('key'))
        {
          $key = $request->input('key');
        }
        $suppliers = Supplier::where('name','LIKE',"%$key%")->paginate(5);
        return view('admin.suppliers.index',compact('suppliers'));
    }

    //show giao diện thêm 

    public function showAddIndexSupplier()
    {
        return view('admin.suppliers.add');
    }

    //thực thi thêm nhà cung cấp

    public function addDataSupplier(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            // Lấy ID của người dùng đang đăng nhập
            $userId = Auth::guard('admin')->user()->id;
    
            // Thêm thuộc tính vào bảng attributes và lưu trữ ID của người dùng
            Supplier::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'id' => $userId,
                // Thêm các trường thông tin khác của thuộc tính nếu cần
            ]);
    
            return redirect()->route('indexsupplier')->with('status','Thêm thành công rồi nè');
        }
        return redirect()->back()->withErrors(['status' => 'Bạn phải đăng nhập để thêm thuộc tính']);
    }

    ///viết hàm xoá

    public function deleteSupplier($id)
    {
        $suppliers = Supplier::find($id);

        if(!empty($suppliers))
        {
            $suppliers->delete();
            return redirect()->route('indexsupplier')->with('status','Xoá thành công rồi nè');

        }
        return redirect()->route('indexsupplier')->with('status',"Bạn xoá chưa thành công"); 
    }

    //viết hàm sửa 

    public function updateSupplier($id)
    {
        $suppliers = Supplier::find($id);
      return view('admin.suppliers.update',compact('suppliers'));
    }

    public function updateDataSupplier(Request $request,$id)
    {
        $suppliers = Supplier::find($id);
        if (!$suppliers) {
            return redirect()->route('indexattribute')->withErrors(['status' => 'Nhà cung cấp không tồn tại']);
        }

        // Cập nhật thuộc tính
        $suppliers->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);
        return redirect()->route('indexsupplier')->with('status','Bạn sửa thành công rồi nè');
    }
}

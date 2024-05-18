<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductType;
use Illuminate\Http\Request;

class AdminProductTypeController extends Controller
{
    //
    //show giao diện loại sản phẩm

    public function showProductType()
    {
        // $producttypes = ProductType::all();
        $producttypes = ProductType::paginate(2);
        return view('admin.typeproduct.index', compact('producttypes'));
    }

    //Hàm Tìm id product type để sửa
    public function editProductType($id)
    {
        $producttypes = ProductType::find($id);
        return view('admin.typeproduct.update', compact('producttypes'));
    }
    //show giao diện thêm loại sản phẩm
    public function showAddProductType()
    {
        return view('admin.typeproduct.create');
    }

    //show giao diện sửa loại sản phẩm  

    public function showEditProductType()
    {
        return view('admin.typeproduct.update');
    }
    //hàm add product type
    public function addProductType(Request $request)
    {
         // Validate dữ liệu nếu cần
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'checkactive' => 'required',
        ]);

        // Lấy ID của người dùng từ request
        $userId = $request->user_id;

        // Tạo sản phẩm mới với dữ liệu được cung cấp và ID của người dùng
        ProductType::create([
            'name' => $request->name,
            'description' => $request->description,
            'checkactive' => $request->checkactive,
            'user_id' => $userId,
        ]);

        // Chuyển hướng sau khi lưu thành công
        return redirect('admin.typeproduct.index')->with('success', 'Product type created successfully.');
    }
    //Ham xóa
    public function deleteProductTypes($id)
    {
        $producttype = Producttype::find($id);
        if (!empty($producttype)) {
            $producttype->delete();
            return redirect()->route('indexproducttype')->with('status', "Xoá thành công rồi nè");
        }
        return redirect()->route('indexproducttype')->with('status', "Bạn xoá chưa thành công");
    }

    //
    public function update(Request $request, $id)
    {
        // Validate dữ liệu nếu cần
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        // Tìm bản ghi cần cập nhật
        $productType = ProductType::find($id);

        // Kiểm tra xem bản ghi có tồn tại không
        if (!$productType) {
            return redirect()->back()->with('error', 'Không tìm thấy loại sản phẩm.');
        }

        // Cập nhật dữ liệu
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->save();

        // Chuyển hướng sau khi cập nhật thành công
        return redirect()->route('indexproducttype')->with('success', 'Cập nhật loại sản phẩm thành công.');
    }
}

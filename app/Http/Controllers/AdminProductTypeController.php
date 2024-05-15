<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProductType;
use Illuminate\Http\Request;

class AdminProductTypeController extends Controller
{
    //
    //show giao diện loại sản phẩm

    public function showProductType()
    {
        $producttypes = ProductType::all();
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        //tạo ra 1 producttype mới
        $productType = new ProductType();

        // cập nhật dữ liệu cho producttype
        $productType->name = $validatedData['name'];
        $productType->discription = $validatedData['description'];
        //save
        $productType->save();

        return redirect('admin.typeproduct.create')->with('success', 'Thêm loại sản phẩm thành công!');
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

}

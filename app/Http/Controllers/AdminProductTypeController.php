<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductTypeController extends Controller
{
    //
    //show giao diện loại sản phẩm

    public function showProductType()
    {
        return view('admin.typeproduct.index');
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

    // show giao dien them san pham
    public function AddNewProduct(Request $request)
    {
        Product::create(
            [
                //Luu thong tin vao mysql
                'name'=>$request->input('name'),
                'image'=>$request->input('image'),
                'price'=>$request->input('price'),
                'quantity'=>$request->input('quantity')]
            );
        return redirect('categoryuser')->with("thongbao","Thêm thành công!");
    }
}

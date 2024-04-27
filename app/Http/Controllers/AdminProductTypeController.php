<?php

namespace App\Http\Controllers;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    //
    public function showIndexProduct()
    {
        return view('admin.product.index');
    }

    //show giao diện thêm sản phẩm

    public function showCreateProduct()
    {
        return view('admin.product.create');
    }

    //show giao diện sửa sản phẩm

    public function showEditCaterogtProduct()
    {
        return view('admin.product.update');
    }
}

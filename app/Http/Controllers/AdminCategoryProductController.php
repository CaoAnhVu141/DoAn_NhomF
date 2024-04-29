<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher;

class AdminCategoryProductController extends Controller
{
    // show giao diện danh mục
    public function showCategory()
    {
        return view('admin.category.index');
    }

    public function showAddCategory()
    {
        return view('admin.category.create');
    }

    //show giao diện cập nhật danh mục

    public function showEditCategory()
    {
        return view ('admin.category.update');
    }

    //Show Giao Dien Danh Sach San Pham
    public function ShowCategoryUser()
    {
        $Product = Product::all();
        return view('User.product.category',compact('Product'));
      
    }
    //Show Giao Dien add San Pham
    public function ShowAddProduct()
    {
        $Product = Product::all();
        return view('User.product.addproduct',compact('Product'));  
    }
}

<?php

namespace App\Http\Controllers;

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
}

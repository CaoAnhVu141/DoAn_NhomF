<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRelatedcategoryController extends Controller
{
    //
    public function showIndexRelated()
    {
        return view('admin.relatedcategory.index');
    }
    //show giao diện thêm
    public function showCreateRelated()
    {
        return view('admin.relatedcategory.create');
    }
    //giao diện sửa
    public function showEditRelated()
    {
        return view('admin.relatedcategory.update');
    }
}

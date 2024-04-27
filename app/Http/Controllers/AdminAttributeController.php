<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{
    //
    //show giao diện thuộc tính

    public function showIndexAattribute()
    {
        return view('admin.attribute.index');
    }

    //show giao diện thêm thuộc tính

    public function showCreateAttribute()
    {
        return view('admin.attribute.create');
    }

    //show giao diện sửa

    public function showEditAttribute()
    {
        return view('admin.attribute.update');
    }
}

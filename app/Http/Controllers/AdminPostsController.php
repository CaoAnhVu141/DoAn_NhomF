<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    //

    //show giao diện bài viết

    public function showIndexPost()
    {
        return view('admin.posts.index');
    }

    //show giao diện thêm 

    public function showCreatePost()
    {
        return view('admin.posts.create');
    }
}

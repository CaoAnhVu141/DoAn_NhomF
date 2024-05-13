<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCategoryPost extends Controller
{
    //
    ///
    //show giao diện thêm loại bài viết
    public function showIndexCategoryPost(Request $request)
    { 
        $key = "";
       if($request->input('key'))
       {
         $key = $request->input('key');
       }
        $categorypost = CategoryPost::where('name','LIKE',"%$key%")->paginate(5);
        return view('admin.categorypost.index',compact('categorypost'));
    }

    //show giao diện them danh mục bài viết

    public function showAddIndexCategoryPost()
    {
        return view('admin.categorypost.add');
    }


    //thực hiện thêm 

    public function addDataCategoryPost(Request $request)
    {
        $request->validate([
            'namecategory' => 'required|string',
            'descriptioncategory' => 'required|string',
        ]);

        if (Auth::guard('admin')->check()) {
            // Lấy ID của người dùng đang đăng nhập
            $userId = Auth::guard('admin')->user()->id;
    
            // Thêm thuộc tính vào bảng attributes và lưu trữ ID của người dùng
            CategoryPost::create([
                'name' => $request->input('namecategory'),
                'discription' => $request->input('descriptioncategory'),
                'id' => $userId,
                // Thêm các trường thông tin khác của thuộc tính nếu cần
            ]);
    
            return redirect()->route('indexcategorypost')->with('status','Thêm thành công rồi nè');
        }
    }

    //show giao diện sửa

    public function showIndexUpdate($id)
    {
        $categorypost = CategoryPost::find($id);       
         return view('admin.categorypost.update',compact('categorypost'));
    }

    //viết hàm hiện và ẩn check status

    public function ShowOrHideCategoryPost($id)
    {
        $categorypost = CategoryPost::findOrFail($id);
        $categorypost->checkstatus = !$categorypost->checkstatus;
        $categorypost->save();

        return redirect()->route('indexcategorypost')->with('status',"Bạn đã cập nhật thành công");
    }


    //viết hàm xoá 

    public function deteleCategoryPost($id)
    {
        $categorypost = CategoryPost::find($id);

        if(!empty($categorypost))
        {
            $categorypost->delete();
            return redirect()->route('indexcategorypost')->with('status','Bạn đã xoá thành công');
        }

    }

    //viết hàm sửa danh mục bài viết

    public function updateDataCategoryPost(Request $request, $id)
    {

        $categorypost = CategoryPost::find($id);
            if (!$categorypost) {
                return redirect()->route('indexattribute')->withErrors(['status' => 'Thuộc tính không tồn tại']);
            }

            // Cập nhật thuộc tính
            $categorypost->update([
                'name'=>$request->input('namecategory'),
                'discription'=>$request->input('descriptioncategory'),
            ]);

        return redirect()->route('indexcategorypost')->with('status','Bạn đã cập nhật thành công');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class AdminAttributeController extends Controller
{
    //
    //show giao diện thuộc tính

    public function showIndexAattribute()
    {
        $attribute = Attribute::paginate(5);
        return view('admin.attribute.index',compact('attribute'));
    }

    //show giao diện thêm thuộc tính

    public function showCreateAttribute()
    {
        return view('admin.attribute.create');
    }


    ///thêm thuộc tính
   public function addDataAttribute(Request $request)
   {
    if (Auth::guard('admin')->check()) {
        // Lấy ID của người dùng đang đăng nhập
        $userId = Auth::guard('admin')->user()->id;

        // Thêm thuộc tính vào bảng attributes và lưu trữ ID của người dùng
        Attribute::create([
            'name' => $request->input('attributename'),
            'discription' => $request->input('attributedescription'),
            'id' => $userId,
            // Thêm các trường thông tin khác của thuộc tính nếu cần
        ]);

        return redirect()->route('indexattribute')->with('status','Thêm thành công rồi nè');
    }
    return redirect()->back()->withErrors(['status' => 'Bạn phải đăng nhập để thêm thuộc tính']);
   }


    //show giao diện sửa

    public function showEditAttribute($id)
    {
        $attribute = Attribute::find($id);
        return view('admin.attribute.update',compact('attribute'));
    }


   ///viết hàm ẩn hoặc hiện cho checkactive
    public function ShowOrHideCheck($id)
    {
        $attribute = Attribute::find($id);
        $attribute->checkactive = !$attribute->checkactive;
        $attribute->save();

        return redirect()->route('indexattribute')->with('status',"Thành công rồi nè");
    }


    //viết hàm xoá thuộc tính

    public function deleteAttribute($id)
    {
       $attribute = Attribute::find($id);
        if(!empty($attribute))
        {
            $attribute->delete();
            return redirect()->route('indexattribute')->with('status',"Bạn xoá thành công");
        }

        return redirect()->route('indexattribute')->with('status',"Bạn xoá chưa thành công"); 
    }

    //viết hàm thực thi sửa thuộc tính

    public function updateAttribute(Request $request,$id)
    {
       // Kiểm tra xem thuộc tính có tồn tại không
            $attribute = Attribute::find($id);
            if (!$attribute) {
                return redirect()->route('indexattribute')->withErrors(['status' => 'Thuộc tính không tồn tại']);
            }

            // Cập nhật thuộc tính
            $attribute->update([
                'name' => $request->input('attributename'),
                'discription' => $request->input('attributedescription'),
            ]);

            return redirect()->route('indexattribute')->with('status', 'Sửa thành công rồi nè');
            }
}

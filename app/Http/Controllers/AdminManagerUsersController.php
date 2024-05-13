<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminManagerUsersController extends Controller
{
    //

    public function showManagerUsers(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = DB::table('users')->paginate(5);
        return view('admin.manageruser.indexuser',compact('users'));
    }

    //show toàn bộ tài khoản

//    public function showAllUser(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
//    {
////        $users = User::paginate(5); // Sử dụng paginate trên mô hình User
////        return view('admin.manageruser.indexuser', ['users' => $users]);
//         // Lấy danh sách người dùng với mỗi trang có tối đa 5 người dùng
//        return view('admin.manageruser.indexuser', compact('users'));
//    }

    //Xoa User
    public function deleteUser($id): RedirectResponse
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Người dùng đã được xóa thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy người dùng để xóa.');
        }
    }
    //Sua
    public function edit($id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        // Lấy thông tin người dùng cần chỉnh sửa từ database
        $user = User::find($id);
        // Trả về view để hiển thị form chỉnh sửa thông tin
        return view('admin.manageruser.edit_user', compact('user'));
    }

    public function update(Request $request, $id): RedirectResponse
    {

        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$id.',user_id',
            'phone' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string',
        ]);

        // Lấy thông tin người dùng từ database
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Không tìm thấy người dùng để cập nhật.');
        }

        // Cập nhật thông tin người dùng
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');


        // Xử lý ảnh đại diện nếu có
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('avatars'), $avatarName);
            $user->avatar = $avatarName;
        }

        // Lưu lại thông tin người dùng
        $user->save();

        return redirect()->back()->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }

}

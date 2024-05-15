<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminManagerUsersController extends Controller
{
    //

    public function showManagerUsers(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = DB::table('users')->paginate(5);
        return view('admin.manageruser.indexuser',compact('users'));
    }

    //show toàn bộ tài khoản

    public function showAllUser(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $users = DB::table('users')->paginate(5);
        return view('admin.manageruser.indexuser',compact('users'));
    }

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
            return redirect()->route('manageruser')->with('error', 'Không tìm thấy người dùng để cập nhật.');
        }

        // Cập nhật thông tin người dùng
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');


        // Xử lý ảnh đại diện nếu có
        if ($request->hasFile('newAvatar')) {
            // Xóa ảnh cũ nếu có
            if ($user->avatar && Storage::exists($user->avatar)) {
                Storage::delete($user->avatar);
            }

            // Lưu ảnh mới
            $image = $request->file('newAvatar');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('storage/app/public/avatars/', $imageName);

            // Cập nhật tên ảnh trong database
            $user->avatar = 'avatars/'.$imageName;
        }

        // Lưu lại thông tin người dùng
        $user->save();

        return redirect()->route('manageruser')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
    // Hiển thị form đăng ký
    public function showRegistrationForm(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.manageruser.register');
    }

    // Xử lý yêu cầu đăng ký
    public function register(Request $request): RedirectResponse
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required|string',
            'password' => 'required|string|min:8', // Thêm quy định về mật khẩu
        ]);

        $file = $request->file('avatar'); // Lấy file từ request

        if ($file) {
            $file_name = $file->getClientOriginalName();

            // Kiểm tra xem thư mục public/uploads đã tồn tại chưa
            $directory = 'uploads';
            if (!File::exists($directory)) {
                // Nếu thư mục không tồn tại, hãy tạo nó
                File::makeDirectory($directory);
            }

            // Di chuyển tệp tải lên vào thư mục public/uploads
            $path = $file->move($directory, $file_name);

            // Tạo đường dẫn của ảnh từ thư mục uploads
            $thumbnail = $directory . '/' . $file_name;
        } else {
            $thumbnail = null; // Nếu không có tệp tải lên, sử dụng giá trị null cho thumbnail
        }

        // Tạo người dùng mới
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'password' => Hash::make($request->input('password')),
            'avatar' => $avatarPath, // Đường dẫn tới ảnh đại diện
        ]);

        return redirect()->route('manageruser')->with('success', 'Người dùng đã được thêm thành công.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminSupplierController extends Controller
{
    //

    public function showIndexSupplier(Request $request)
    {
        $suppliers = Supplier::paginate(5);
        return view('admin.suppliers.index', ['suppliers' => $suppliers]);
    }

    //show giao diện thêm

    public function showAddIndexSupplier()
    {
        return view('admin.suppliers.add');
    }

    //thực thi thêm nhà cung cấp

    public function addDataSupplier(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Kiểm tra trường name, bắt buộc, chuỗi, tối đa 255 ký tự
            'description' => 'required|string', // Kiểm tra trường description, bắt buộc, chuỗi
            'email' => 'required|email', // Kiểm tra trường email, bắt buộc, định dạng email
            'phone' => 'required|string', // Kiểm tra trường phone, bắt buộc, chuỗi
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Kiểm tra trường image, bắt buộc, định dạng ảnh hợp lệ
        ]);

        $file = $request->file('image'); // Lấy file từ request

        if ($file) {
            $file_name = time() . '_' . $file->getClientOriginalName();

            // Kiểm tra xem thư mục public/uploads đã tồn tại chưa
            $directory = 'uploads';
            if (!File::exists(public_path($directory))) {
                // Nếu thư mục không tồn tại, hãy tạo nó
                File::makeDirectory(public_path($directory), 0755, true);
            }

            // Di chuyển tệp tải lên vào thư mục public/uploads
            $path = $file->move(public_path($directory), $file_name);

            // Tạo đường dẫn của ảnh từ thư mục uploads
            $thumbnail = $directory . '/' . $file_name;
        } else {
            $thumbnail = null; // Nếu không có tệp tải lên, sử dụng giá trị null cho thumbnail
        }
        if (Auth::guard('admin')->check()) {
            // Lấy ID của người dùng đang đăng nhập
            $userId = Auth::guard('admin')->user()->id;
            Supplier::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'image' => $thumbnail,
                'id' => $userId,
            ]);

            return redirect()->route('indexsupplier')->with('status', 'Thêm thành công rồi nè');
        }
        return redirect()->back()->withErrors(['status' => 'Bạn phải đăng nhập để thêm thuộc tính']);
    }

    ///viết hàm xoá

    public function deleteSupplier($id): \Illuminate\Http\RedirectResponse
    {
        $supplier = Supplier::find($id);
        if(!empty($supplier))
        {
            $supplier->delete();
            return redirect()->route('indexsupplier')->with('status',"Bạn xoá thành công");
        }
        else{
            return redirect()->route('indexsupplier')->with('status',"Nhà cung cấp không tồn tại");
        }
    }

    //viết hàm sửa

    public function updateSupplier($id): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $suppliers = Supplier::find($id);
        return view('admin.suppliers.update', compact('suppliers'));
    }

    public function updateDataSupplier(Request $request, $id)
    {
        $file = $request->file('image'); // Lấy file từ request

        if ($file) {
            $file_name = time() . '_' . $file->getClientOriginalName();

            // Kiểm tra xem thư mục public/uploads đã tồn tại chưa
            $directory = 'uploads';
            if (!File::exists(public_path($directory))) {
                // Nếu thư mục không tồn tại, hãy tạo nó
                File::makeDirectory(public_path($directory), 0755, true);
            }

            // Di chuyển tệp tải lên vào thư mục public/uploads
            $path = $file->move(public_path($directory), $file_name);

            // Tạo đường dẫn của ảnh từ thư mục uploads
            $thumbnail = $directory . '/' . $file_name;
        } else {
            $thumbnail = null; // Nếu không có tệp tải lên, sử dụng giá trị null cho thumbnail
        }
        $suppliers = Supplier::find($id);
        if (!$suppliers) {
            return redirect()->route('indexattribute')->withErrors(['status' => 'Nhà cung cấp không tồn tại']);
        }
        if ($thumbnail !== null) {
            $suppliers->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'image' => $thumbnail,
            ]);
        }
        else{
            $suppliers->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
            ]);
        }
        return redirect()->route('indexsupplier')->with('status', 'Bạn sửa thành công rồi nè');
    }
}

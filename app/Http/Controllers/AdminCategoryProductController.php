<?php

namespace App\Http\Controllers;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\User;
use App\Models\CategoryPost;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher;


class AdminCategoryProductController extends Controller
{
    // show giao diện danh mục
    public function showCategory(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $categories = Category::paginate(6);
        return view('admin.category.index', ['category' => $categories]);
    }

    //check active danh mục
    public function checkactivecategory($id)
    {
        $category = Category::find($id);
        $category->checkactive = !$category->checkactive;
        $category->save();

        return redirect()->route('indexcategory')->with('status', "");
    }

    public function showAddCategory()
    {
        return view('admin.category.create');
    }

    //show giao diện cập nhật danh mục

    public function showEditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.update',compact('category'));
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
    //Them danh muc
    public function addCategoryProduct(Request $request)
    {

        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string',
            'category_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // Kiểm tra file ảnh
        ]);

        $file = $request->file('category_image'); // Lấy file từ request

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
        if (Auth::guard('admin')->check()) {
            // Lấy ID của người dùng đang đăng nhập
            $userId = Auth::guard('admin')->user()->id;
            Category::create([
                'name' => $request->input('category_name'),
                'discription' => $request->input('category_description'),
                'id' => $userId,
                'image' => $thumbnail,
            ]);

            return redirect()->route('indexcategory')->with('status', 'Thêm thành công rồi nè');
        }
        return redirect()->back()->withErrors(['status' => 'Bạn phải đăng nhập để thêm thuộc tính']);
    }
    //viết hàm xoá danh muc
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if(!empty($category))
        {
            $category->delete();
            return redirect()->route('indexcategory')->with('status',"Bạn xoá thành công");
        }
        else{
            return redirect()->route('indexcategory')->with('status',"Danh mục không tồn tại");
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AdminPostsController extends Controller
{
    //

    //show giao diện bài viết

    public function showIndexPost(Request $request)
    {
        $key = "";
        if ($request->input('key')) {
            $key = $request->input('key');
        }
        $posts = Post::where('name', 'LIKE', "%$key%")->paginate(3);

        return view('admin.posts.index', ['posts' => $posts]);

    }

    //show giao diện thêm

    public function showCreatePost()
    {
        $categorypost = CategoryPost::all();
        return view('admin.posts.create', compact('categorypost'));
    }

    public function addDataPost(Request $request)
    {
        //
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
        ////
        if (Auth::guard('admin')->check()) {

            $userId = Auth::guard('admin')->user()->id;
            Post::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'id_categorypost' => $request->input('category_id'),
                'avatar' => $thumbnail,
                'id' => $userId,
            ]);
            return redirect()->route('indexpost')->with('status', 'Thêm dữ liệu thành công');
        }
    }


    //viết hàm xoá

    public function deleteListPost($id)
    {
        $posts = Post::find($id);
        if (!empty($posts)) {
            $posts->delete();
            return redirect()->route('indexpost')->with('status', "Bạn đã xoá thành công");
        }
        return redirect()->route('indexpost')->with('status', "Bạn xoá chưa thành công");
    }


    /// sửa bài viết

    public function showIndexUpdatePost($id)
    {
        $posts = Post::find($id);
        $categorypost = CategoryPost::all();

        // Xác định giá trị cần chọn mặc định
        $selectedCategoryId = $posts->id_categorypost;
        return view('admin.posts.update', compact('posts', 'categorypost', 'selectedCategoryId'));
    }

    //thực thi sửa nè

    public function updateIndexDataPost(Request $request,$id)
    {
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

        if(Auth::guard('admin')->check())
        {
            // $userId = Auth::guard('admin')->user()->id;

            // Post::where('id',$id)->update([
            //     'name' => $request->input('name'),
            //     'description' => $request->input('description'),
            //     'content' => $request->input('content'),
            //     'id_categorypost' => $request->input('category_id'),
            //     'avatar' => $thumbnail,
            // ]);
            // return redirect()->route('indexpost')->with('status', 'Sửa dữ liệu thành công');
            $posts = Post::find($id);
            if (!$posts) {
                return redirect()->route('indexpost')->withErrors(['status' => 'Thuộc tính không tồn tại']);
            }

            $posts->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'id_categorypost' => $request->input('category_id'),
                'avatar' => $thumbnail,
            ]);
            return redirect()->route('indexpost')->with('status', 'Sửa thành công rồi nè');
        }
    }
}

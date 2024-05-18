<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminEventController extends Controller
{
    public function indexEvent(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $events = DB::table('events')->paginate(2);
        return view('admin.event.index',compact('events'));
    }
    // Hiển thị form tạo sự kiện mới
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.event.create');
    }

    // Lưu sự kiện mới vào cơ sở dữ liệu
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'linkevent' => 'required|url',
            'checkactive' => 'required|boolean',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
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

        // Lưu sự kiện mới vào cơ sở dữ liệu
        $event = new Event();
        $event->name = $validatedData['name'];
        $event->content = $validatedData['content'];
        $event->image = $thumbnail;
        $event->linkevent = $validatedData['linkevent'];
        $event->checkactive = $validatedData['checkactive'];
        $event->start_date= $validatedData['start_date'];
        $event->end_date = $validatedData['end_date'];
        $event->save();

        return redirect()->route('indexEvent')->with('status', 'Event created successfully.');
    }

    // Xóa sự kiện
    public function destroy($id_event): \Illuminate\Http\RedirectResponse
    {
        $event = Event::find($id_event);
        if ($event) {
            $event->delete();
            return redirect()->back()->with('success', 'Đã được xóa thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy để xóa.');
        }
    }
}

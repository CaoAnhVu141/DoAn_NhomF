<?
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AdminLoginAndRegisterController extends Controller
{
    //From show admin
    public function ShowLogin()
    {
        return view('admin-login-register.login');
    }
    //Show SignUp
    public function ShowRegister()
    {
        return view('admin-login-register.register');
    }
    //Show HomePage
    public function ShowHomePage()
    {
        return view('LayOut.homepage');
    }
    //Login chuyen sang trang home page
    public function AdminLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string','max:50','email'],
            'password' => ['required','min:5'],
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải chứa ít nhất :min ký tự.',
        ]);

      $credentials = $request->only('email','password');
      if(Auth::attempt($credentials))
      {
        return redirect('/index');
      }
      else{
        return redirect('/login')->with('error','Tài Khoản Hoặc Mật Khẩu Sai! Vui Lòng Nhập Lại!');
      }
    }
    public function adminRegister(Request $request) {
        $request->validate([
            'chosefile' => ['required', 'file'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'pass' => ['required', 'string', 'min:5'],
            're_pass'=> ['required', 'string', 'min:5'],
        ], [
            'chosefile.required' => 'Vui lòng chọn một tệp.',
            'chosefile.file' => 'Tệp phải là một tệp.',
            'name.required' => 'Vui lòng nhập tên.',
            'name.max' => 'Tên không được vượt quá :max kí tự.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.max' => 'Địa chỉ email không được vượt quá :max kí tự.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.max' => 'Số điện thoại không được vượt quá :max kí tự.',
            'pass.required' => 'Vui lòng nhập mật khẩu.',
            'pass.min' => 'Mật khẩu phải chứa ít nhất :min kí tự.',
            're_pass.required' => 'Vui lòng nhập lại mật khẩu.',
            're_pass.min' => 'Nhập lại mật khẩu phải chứa ít nhất :min kí tự.',

        ]);
        $file = $request->input('chosefile');
        //
        $file = $request->file('chosefile'); // Lấy file từ request
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
            $thumbnail = null;// Nếu không có tệp tải lên, sử dụng giá trị null cho thumbnail
        }
        //Thực thi đăng ký
        User::create([
            'firsname' => $request->input('firsname'),
            'lastname' => $request->input('lastname'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $request->input('image'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'password' => Hash::make($request->input('password')),    
        ]);
        return redirect('login')->with('status',"Đăng Ký Thành Công!");
  }
}
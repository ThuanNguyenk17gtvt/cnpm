<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_id'=> ['required', 'bail', 'string','min:5' ,'max:15','unique:user,name_id'],
            'name' => ['required', 'bail','string', 'max:255'],
            'email' => ['required', 'bail','string', 'email', 'max:255','unique:user,email'],
            'password' => ['required','bail', 'string', 'min:8','confirmed'],
        ],
        [
            'name_id.required' => 'Name_id là trường bắt buộc',
            'name_id.max' => 'Name_id không quá 15 ký tự',
            'name_id.min' => 'Name_id lớn hơn 5 ký tự',
            'name_id.unique' => 'Name_id đã tồn tại',
            'name.required' => 'Họ và tên là trường bắt buộc',
            'name.max' => 'Họ và tên không quá 255 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không quá 255 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không trùng',

        ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name_id'=>$data['name_id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'level' => '2',
            
        ]);
    }
    public function getRegistration(){
        return view('fontend.registration');
    }
    public function postRegistration(Request $request){
        
        $allRequest  = $request->all(); 
        $validator = $this->validator($allRequest);
     
        if ($validator->fails()) {
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            return redirect('registration')->withErrors($validator)->withInput();
        } else {   
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            if( $this->create($allRequest)) {
                // Insert thành công sẽ hiển thị thông báo
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('login');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                 Session::flash('error', 'Đăng ký thành viên không thành công!');
               return redirect()->back();
            }
        }
    }
}
